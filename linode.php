<?php

require_once 'templating.php';
$name = 'Linode';
$longName = $name;
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code;
        return `https://speedtest.${code}.linode.com/empty.php?${cache_buster}`;
    }

    // https://speedtest.singapore.linode.com/empty.php

    // https://status.linode.com/

    let regions = [{
        text1: "US East",
        text2: "Newark",
        code: "newark"
    }, {
        text1: "US Central",
        text2: "Dallas",
        code: "dallas"
    }, {
        text1: "US West",
        text2: "Fremont",
        code: "fremont"
    }, {
        text1: "US Southeast",
        text2: "Atlanta",
        code: "atlanta"
    }, {
        text1: "US-IAD",
        text2: "Washington",
        code: "washington",
    }, {
        text1: "US-ORD",
        text2: "Chicago",
        code: "chicago",
    }, {
        text1: "CA Central",
        text2: "Toronto",
        code: "toronto1",
    }, {
        text1: "EU West",
        text2: "London",
        code: "london"
    }, {
        text1: "EU Central",
        text2: "Frankfurt",
        code: "frankfurt"
    }, {
        text1: "FR-PAR",
        text2: "Paris",
        code: "paris"
    }, {
        text1: "AP South",
        text2: "Singapore",
        code: "singapore"
    }, {
        text1: "AP Northeast-2",
        text2: "Tokyo 2",
        code: "tokyo2",
    }, {
        text1: "AP West",
        text2: "Mumbai",
        code: "mumbai1",
    }, {
        text1: "AP-Southeast",
        text2: "Sydney",
        code: "syd1",
    }, {
        text1: "SE-STO",
        text2: "Stockholm",
        code: "stockholm",
    }, {
        text1: "US-SEA",
        text2: "Seattle",
        code: "seattle",
    }, {
        text1: "IT-MIL",
        text2: "Milan",
        code: "milan",
    }, {
        text1: "JP-OSA",
        text2: "Osaka",
        code: "osaka",
    }, {
        text1: "IN-MAA",
        text2: "Chennai",
        code: "chennai",
    }, {
        text1: "ID-CGK",
        text2: "Jakarta",
        code: "jakarta",
    }, {
        text1: "BR-GRU",
        text2: "Sao Paulo",
        code: "sao-paulo",
    }, {
        text1: "NL-AMS",
        text2: "Amsterdam",
        code: "amsterdam",
    }, {
        text1: "US-MIA",
        text2: "Miami",
        code: "miami",
    }, {
        text1: "US-LAX",
        text2: "Los Angeles",
        code: "los-angeles",
    }, {
        text1: "ES-MAD",
        text2: "Madrid",
        code: "madrid",

    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
