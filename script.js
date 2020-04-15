var table;

$('button').click(function (e) {
    window.stop_that = true;
    $('button').remove();
    $.fn.dataTable.numString(/\d+ ms/);
    table = $("table").DataTable({
        "paging": false,
        "info": false,
    });
    if (e.ctrlKey || e.altKey || e.shiftKey) {
        window.open('https://www.youtube.com/watch?v=QB0Oc0GxB2E');
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
    var a = function () {
        var endTime = Date.now();
        var timeElapsed = endTime - startTime;

        if (undefined !== callback) {
            callback(timeElapsed);
        }
    }
    image.onerror = a;
    image.onload = a;
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
        $tr.find('td.region_mean').data('latency', stats.mean(values));
        $tr.find('td.region_mean').html("<b>" + stats.mean(values).toFixed(0) + " ms</b>");
        $tr.find('td.region_median').data('latency', stats.median(values));
        $tr.find('td.region_median').html("<b>" + stats.median(values).toFixed(0) + " ms</b>");
        $tr.find('td.region_lowest').data('latency', stats.lowest(values));
        $tr.find('td.region_lowest').html("<b>" + stats.lowest(values).toFixed(0) + " ms</b>");
        $tr.find('td.region_highest').data('latency', stats.highest(values));
        $tr.find('td.region_highest').html("<b>" + stats.highest(values).toFixed(0) + " ms</b>");

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
