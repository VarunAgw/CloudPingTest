<?php
require_once 'templating.php';
$name = 'Vultr';
$longName = $name;
ob_start();
?>
    <script>
//      https://status.vultr.com/
//      https://sto-se-ping.vultr.com/

        function src(region_id) {
            let cache_buster = "cache_buster=" + (+Date.now());

            let code = regions[region_id].code;
            return `https://${code}-ping.vultr.com/ping?${cache_buster}`;
        }

        var regions = [{
            text1: "India",
            text2: "Mumbai",
            code: "bom-in"
        }, {
            text1: "South Korea",
            text2: "Seoul",
            code: "sel-kor"
        }, {
            text1: "Singapore",
            text2: "Singapore",
            code: "sgp"
        }, {
            text1: "Japan",
            text2: "Tokyo",
            code: "hnd-jp"
        }, {
            text1: "Australia",
            text2: "Melbourne",
            code: "mel-au"
        }, {
            text1: "Australia",
            text2: "Sydney",
            code: "syd-au"
        }, {
            text1: "Netherlands",
            text2: "Amsterdam",
            code: "ams-nl"
        }, {
            text1: "Germany",
            text2: "Frankfurt",
            code: "fra-de"
        }, {
            text1: "United Kingdom",
            text2: "London",
            code: "lon-gb"
        }, {
            text1: "Spain",
            text2: "Madrid",
            code: "mad-es"
        }, {
            text1: "France",
            text2: "Paris",
            code: "par-fr"
        }, {
            text1: "Sweden",
            text2: "Stockholm",
            code: "sto-se"
        }, {
            text1: "Poland",
            text2: "Warsaw",
            code: "waw-pl"
        }, {
            text1: "United States",
            text2: "Atlanta",
            code: "ga-us"
        }, {
            text1: "United States",
            text2: "Chicago",
            code: "il-us"
        }, {
            text1: "United States",
            text2: "Dallas",
            code: "tx-us"
        }, {
            text1: "United States",
            text2: "Honolulu",
            code: "hon-hi-us"
        }, {
            text1: "United States",
            text2: "Los Angeles",
            code: "lax-ca-us"
        }, {
            text1: "Mexico",
            text2: "Mexico City",
            code: "mex-mx"
        }, {
            text1: "United States",
            text2: "Miami",
            code: "fl-us"
        }, {
            text1: "United States",
            text2: "New Jersey",
            code: "nj-us"
        }, {
            text1: "United States",
            text2: "Seattle",
            code: "wa-us"
        }, {
            text1: "United States",
            text2: "Silicon Valley",
            code: "sjo-ca-us"
        }, {
            text1: "Canada",
            text2: "Toronto",
            code: "tor-ca"
        }, {
            text1: "Brazil",
            text2: "São Paulo",
            code: "sao-br"
        }];
    </script>
<?php
$body = ob_get_clean();
viewProvider();
?>