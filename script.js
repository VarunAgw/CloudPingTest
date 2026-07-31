var table;

// A region that does not respond within this many ms counts as FAILED,
// so one unreachable region cannot stall the whole run
var PING_TIMEOUT = 5000;

$('button').click(function (e) {
    window.stop_that = true;
    $('button').remove();
    $.fn.dataTable.numString(/\d+ ms/);
    table = $("table").DataTable({
        "paging": false,
        "info": false,
        "fixedHeader": true
    });
    if (e.ctrlKey || e.altKey || e.shiftKey) {
        // window.open('https://www.youtube.com/watch?v=QB0Oc0GxB2E');
    }
})

regions.forEach(function (region, region_id) {
    var $tr = $('<tr>').addClass('region').attr('id', 'region_' + region_id).append([
        $('<td>').addClass('info region_index').html(region_id + 1),
        $('<td>').addClass('info region_name'),
        $('<td>').addClass('info region_code'),
        $('<td>').addClass('stats region_mean'),
        $('<td>').addClass('stats region_median'),
        $('<td>').addClass('stats region_lowest'),
        $('<td>').addClass('stats region_highest')
    ]);
    $tr.find('td.region_name').html(`${region.text1}` + (region.text2.length > 0 ? ` (<b>${region.text2}</b>)` : ""));
    $tr.find('td.region_code').html("<i>" + (region.code || region.text2) + "</i>");
    $tr.find('td.stats').text("-");
    $('tbody').append($tr);
});


$(document).ready(function () {
    // Otherwise browser keeps showing loading sign
    setTimeout(function () {
        ping_regions(-1, 0);
    }, 500);
});

function ping_region(region_id, callback) {
    var startTime = Date.now();
    var image = new Image();
    var timeout_handle;
    var finished = false;

    var finish = function (reached) {
        if (finished) {
            return;
        }
        finished = true;
        clearTimeout(timeout_handle);
        image.onerror = image.onload = null;

        // A timed out region reports 0, which is rendered as "FAILED"
        var timeElapsed = reached ? Date.now() - startTime : 0;

        if (undefined !== callback) {
            callback(timeElapsed);
        }
    }

    // These endpoints answer with text/html or text/plain rather than an image,
    // so onerror is the normal path here and both handlers mean "we got a reply".
    // Do not be tempted to swap this for fetch(mode: "no-cors") to tell a dead
    // region apart from a live one: Opaque Response Blocking rejects the promise
    // for any html/xml/json reply, so every provider except the text/plain ones
    // (aws, coreweave) would report FAILED for regions that are perfectly healthy.
    image.onerror = function () {
        finish(true);
    };
    image.onload = function () {
        finish(true);
    };

    timeout_handle = setTimeout(function () {
        finish(false);
        // Drop the request so it stops holding a connection open
        // for the remaining iterations
        image.src = '';
    }, PING_TIMEOUT);

    // console.log(src(region_id));
    image.src = src(region_id);
}

function ping_regions(iteration_id, region_id) {
    ping_region(region_id, function (timeElapsed) {
        if (0 === region_id) {
            var $th = $('<th>').addClass("test test_" + iteration_id).text("Test " + (iteration_id + 1));
            var $td = $('<td>').addClass("test test_" + iteration_id).text('-');
            $('table').find('tr.heading').append($th);
            $('table').find('tr.region').append($td);
        }

        var $tr = $('table').find('tr.region#region_' + region_id);
        var $td = $tr.find('td.test.test_' + iteration_id);
        if (timeElapsed > 0) {
            $td.text(timeElapsed + " ms");
            $td.data('latency', timeElapsed);
        } else {
            $td.text("FAILED");
            $td.data('latency', 0);
        }
        var values = [];
        $tr.find('td.test').each(function () {
            var value = $(this).data('latency');
            if (value > 0) {
                values.push(value);
            }
        });
        if (0 === values.length) {
            // Every test so far failed, so there is nothing to summarise yet;
            // leaving the latency unset also keeps these cells out of the colouring
            $tr.find('td.stats').removeData('latency').text("-");
        } else {
            var mean = stats.mean(values);
            var median = stats.median(values);
            var lowest = stats.lowest(values);
            var highest = stats.highest(values);
            $tr.find('td.region_mean').data('latency', mean).html("<b>" + mean.toFixed(0) + " ms</b>");
            $tr.find('td.region_median').data('latency', median).html("<b>" + median.toFixed(0) + " ms</b>");
            $tr.find('td.region_lowest').data('latency', lowest).html("<b>" + lowest.toFixed(0) + " ms</b>");
            $tr.find('td.region_highest').data('latency', highest).html("<b>" + highest.toFixed(0) + " ms</b>");
        }

        highlight_stats(['region_mean', 'region_median', 'region_lowest', 'region_highest', 'test_' + iteration_id]);
        region_id++;
        if (region_id === regions.length) {
            region_id = 0;
            if (iteration_id < 0) {
                $('table').find('.test').filter('td,th').remove();
                $('button').attr('disabled', false);
            } else {
                highlight_stats(['test_' + iteration_id]);
            }
            iteration_id++;
        }
        if (true !== window.stop_that || region_id !== 0) {
            ping_regions(iteration_id, region_id);
        } else {
        }
    });
}

function highlight_stats(arr) {
    arr.forEach(function (column) {
        var $rows = $('table').find('td.' + column);
        $rows = $rows.filter(function () {
            return (undefined !== $(this).data('latency'));
        });
        $rows.sort(function (a, b) {
            if ($(a).data('latency') < $(b).data('latency')) {
                return -1;
            } else if ($(a).data('latency') > $(b).data('latency')) {
                return 1;
            } else {
                return 0;
            }
        });
        var least_latency = $rows.first().data('latency');
        var most_latency = $rows.last().data('latency');
        var diff_latency = most_latency - least_latency;
        $rows.each(function () {
            var latency = $(this).data('latency');
            $(this).css('background-color', 'hsl(' + ((most_latency - latency) * 135 / diff_latency) + ", 100%, 50%)");
        });

    });
}

var stats = {
    mean: function (values) {
        var sum = 0;
        values.forEach(function (value) {
            sum = sum + value;
        });

        return sum / values.length;
    },
    median: function (values) {
        values.sort(function (a, b) {
            return a - b;
        });

        var half = Math.floor(values.length / 2);
        if (values.length % 2) {
            return values[half];
        } else {
            return (values[half - 1] + values[half]) / 2.0;
        }
    },
    lowest: function (values) {
        return Math.min.apply(null, values);
    },
    highest: function (values) {
        return Math.max.apply(null, values);
    }
}
