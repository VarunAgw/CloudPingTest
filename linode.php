<?php

require_once 'templating.php';
$name = 'Linode';
$longName = $name;
ob_start();
?>
    <script>
        function src(region_id) {
            let cache_buster = "cache_buster=" + (+Date.now());

            // let code = regions[region_id].codehar || regions[region_id].code;
            // return `https://${code}-linode.cloudharmony.net/probe/ping.js?${cache_buster}`;

            let code = regions[region_id].code;
            return `https://speedtest.${code}.linode.com/empty.php?l9ui3d7s=${cache_buster}`;
        }

        var regions = [{
            text1: "US East",
            text2: "Newark",
            code: "newark"
        }, {
            text1: "US Southeast",
            text2: "Atlanta",
            code: "atlanta"
        }, {
            text1: "US Central",
            text2: "Dallas",
            code: "dallas"
        }, {
            text1: "US West",
            text2: "Fremont",
            code: "fremont"
        }, {
            text1: "CA Central",
            text2: "Toronto",
            code: "toronto1",
            codehar: "toronto"
        }, {
            text1: "EU Central",
            text2: "Frankfurt",
            code: "frankfurt"
        }, {
            text1: "EU West",
            text2: "London",
            code: "london"
        }, {
            text1: "AP South",
            text2: "Singapore",
            code: "singapore"
        }, {
            text1: "AP Northeast-2",
            text2: "Tokyo 2",
            code: "tokyo2",
            codehar: "tokyo"
        }, {
            text1: "AP West",
            text2: "Mumbai",
            code: "mumbai1",
            codehar: "mumbai"
        }, {
            text1: "AP-Southeast",
            text2: "Sydney",
            code: "syd1",
            codehar: "sydney"
        }
        ];
    </script>
<?php
$body = ob_get_clean();
viewProvider();
?>