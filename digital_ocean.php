<?php

require_once 'templating.php';
$name = 'Digital Ocean';
$longName = $name;
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code.replace(/-/g, '');
        return `https://${code}.digitaloceanspaces.com/${cache_buster}`;
    }

    let regions = [{
    //         text1: "NYC 1",
    //         text2: "New York City",
    //         code: "nyc-1",
    // }, {
    //     text1: "NYC 2",
    //     text2: "New York City",
    //     code: "nyc-2",
    // }, {
        text1: "NYC 3",
        text2: "New York City",
        code: "nyc-3",
    }, {
    //     text1: "SFO 1",
    //     text2: "San Francisco",
    //     code: "sfo-1"
    // }, {
        text1: "SFO 2",
        text2: "San Francisco",
        code: "sfo-2"
    }, {
        text1: "SFO 3",
        text2: "San Francisco",
        code: "sfo-3"
    }, {
        //     text1: "AMS 2",
        //     text2: "Amsterdam",
        //     code: "ams-2"
        // }, {
        text1: "AMS 3",
        text2: "Amsterdam",
        code: "ams-3"
    }, {
        text1: "SGP 1",
        text2: "Singapore",
        code: "sgp-1",
        }, {
            text1: "LON 1",
            text2: "London",
            code: "lon-1"
    }, {
        text1: "FRA",
        text2: "Frankfurt",
        code: "fra-1"
        }, {
            text1: "TOR 1",
            text2: "Toronto",
            code: "tor-1"
    }, {
        text1: "BLR",
        text2: "Bangalore",
        code: "blr-1"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
