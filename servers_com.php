<?php
require_once 'templating.php';
$name = 'servers.com';
$longName = $name;
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        return `https://test.${regions[region_id].code}.servers.com/?${cache_buster}`;
    }

    // https://test.dfw1.servers.com/

    // https://www.servers.com/support/knowledge/data-centers-and-network/hosts-to-use-for-latency-tests
    // https://www.servers.com/about/network/network-performance

    let regions = [{
        text1: "Dallas–Fort Worth, TX, USA",
        text2: "DFW1",
        code: "dfw1"
    }, {
        text1: "Dallas–Fort Worth, TX, USA",
        text2: "DFW2",
        code: "dfw2"
    }, {
        text1: "Dallas–Fort Worth, TX, USA",
        text2: "DFW3",
        code: "dfw3"
    }, {
        text1: "San Francisco Bay Area, CA, USA",
        text2: "SJC1",
        code: "sjc1"
    }, {
        text1: "Washington D.C., VA, USA",
        text2: "WAS1",
        code: "was1"
    }, {
        text1: "Washington D.C., VA, USA",
        text2: "WAS2",
        code: "was2"
    }, {
        text1: "Hong Kong, Hong Kong",
        text2: "HKG1",
        code: "hkg1"
    }, {
        text1: "Singapore, Singapore",
        text2: "SIN1",
        code: "sg01"
    }, {
        text1: "Amsterdam, Netherlands",
        text2: "AMS1",
        code: "ams1"
    }, {
        text1: "Amsterdam, Netherlands",
        text2: "AMS2",
        code: "ams2"
    }, {
        text1: "Amsterdam, Netherlands",
        text2: "AMS3",
        code: "ams3"
    }, {
        text1: "Amsterdam, Netherlands",
        text2: "AMS4",
        code: "ams4"
    }, {
        text1: "Amsterdam, Netherlands",
        text2: "AMS5",
        code: "ams5"
    }, {
        text1: "London, United Kingdom",
        text2: "LON1",
        code: "lon1"
    }, {
        text1: "Luxembourg, Luxembourg",
        text2: "LUX1",
        code: "lux1"
    }, {
        text1: "Luxembourg, Luxembourg",
        text2: "LUX2",
        code: "lux2"
    }]
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
