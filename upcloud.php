<?php
http_response_code(404);
die();

require_once 'templating.php';
$name = 'Upcloud';
$longName = $name;
ob_start();
?>
    <script>
        function src(region_id) {
            let cache_buster = "cache_buster=" + (+Date.now());

            let code2 = regions[region_id].code2;
            return `https://${code2}-upcloud.cloudharmony.net/probe/ping.js?${cache_buster}`;
        }

        var regions = [{
            text1: "Germany",
            text2: "Frankfurt",
            code: "de-fra1",
            code2: "frankfurt"
        }, {
            text1: "Finland",
            text2: "Helsinki",
            code: "fi-hel1",
            code2: "helsinki"
        }, {
            text1: "Netherlands",
            text2: "Amsterdam",
            code: "nl-ams1",
            code2: "amsterdam"
        }, {
            text1: "Singapore",
            text2: "Singapore",
            code: "sg-sin1",
            code2: "singapore"
        }, {
            text1: "United Kingdom",
            text2: "London",
            code: "uk-lon1",
            code2: "london"
        }, {
            text1: "United States",
            text2: "Chicago",
            code: "us-chi1",
            code2: "chicago"
        }, {
            text1: "United States",
            text2: "San Jose",
            code: "us-sjo1",
            code2: "san-jose"
        }];
    </script>
<?php
$body = ob_get_clean();
viewProvider();
?>