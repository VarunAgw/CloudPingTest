<?php
require_once 'templating.php';
$name = 'Contabo';
$longName = 'Contabo';
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code.toLowerCase();
        return `https://${code}.speedtest.contabo.net/?${cache_buster}`;

        // https://www.speedtest.net/
        // https://contabo.com/blog/two-new-us-data-center-regions-launched-today/
    }

    let regions = [{
        text1: "United States",
        text2: "St. Louis, MO",
        code: "stl",
    }, {
        text1: "United States",
        text2: "Orangeburg, NY",
        code: "ony",
    }, {
        text1: "United States",
        text2: "Seattle, WA",
        code: "sea",
    }, {
        text1: "United States",
        text2: "New York City, NY",
        code: "nyc",
    }, {
        text1: "United Kingdom",
        text2: "Portsmouth",
        code: "pme",
    }, {
        text1: "Germany",
        text2: "Dusseldorf",
        code: "dus",
    },{
        text1: "Germany",
        text2: "Karlsruhe",
        code: "kae",
    }, {
        text1: "Germany",
        text2: "Nuremberg",
        code: "nue",
    }, {
        text1: "Germany",
        text2: "Munich",
        code: "muc",
    }, {
        text1: "France",
        text2: "Lauterbourg",
        code: "ltg",
    }, {
        text1: "India",
        text2: "Mumbai",
        code: "bom",
    }, {
        text1: "Australia",
        text2: "Sydney",
        code: "syd",
    }, {
        text1: "Japan",
        text2: "Tokyo",
        code: "tyo",
    }, {
        text1: "Singapore",
        text2: "Singapore",
        code: "sin",
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
