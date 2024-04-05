<?php
require_once 'templating.php';
$name = 'Gcore';
$longName = $name;
ob_start();
?>
<script>
    function src(region_id) {
        // Required for firefox
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code;
        return `https://${code}-speedtest.tools.gcore.com/speedtest-backend/empty.php?cors=true&${cache_buster}`;
    }

    // https://speedtest.gcore.com/
    // JSON.stringify(SPEEDTEST_SERVERS.map(function (region) {
    //     return {
    //         text1: region.name.match(/\((.*?)\)$/)[1],
    //         text2: region.name.match(/^(.*?) \(/)[1],
    //         code: region.server.match(/^https:\/\/(.*?)-/)[1]
    //     };
    // }), null, 2)

    let regions = [
        {
            "text1": "Kazakhstan",
            "text2": "Almaty",
            "code": "kal"
        },
        {
            "text1": "Netherlands",
            "text2": "Amsterdam",
            "code": "am3"
        },
        {
            "text1": "Thailand",
            "text2": "Bangkok",
            "code": "tidc"
        },
        {
            "text1": "Argentina",
            "text2": "Buenos Aires",
            "code": "syt"
        },
        {
            "text1": "Egypt",
            "text2": "Cairo",
            "code": "teg"
        },
        {
            "text1": "UAE",
            "text2": "Dubai",
            "code": "eti"
        },
        {
            "text1": "Germany",
            "text2": "Frankfurt",
            "code": "fr5"
        },
        {
            "text1": "Hong Kong",
            "text2": "Hong Kong",
            "code": "hk2"
        },
        {
            "text1": "Türkiye",
            "text2": "Istanbul",
            "code": "tii"
        },
        {
            "text1": "South Africa",
            "text2": "Johannesburg",
            "code": "jp1"
        },
        {
            "text1": "Nigeria",
            "text2": "Lagos",
            "code": "lgs"
        },
        {
            "text1": "United Kingdom",
            "text2": "London",
            "code": "thn2"
        },
        {
            "text1": "United States",
            "text2": "Los Angeles",
            "code": "la2"
        },
        {
            "text1": "United States",
            "text2": "Minneapolis",
            "code": "min4"
        },
        {
            "text1": "India",
            "text2": "Mumbai",
            "code": "ww"
        },
        {
            "text1": "United States",
            "text2": "New York",
            "code": "ny2"
        },
        {
            "text1": "France",
            "text2": "Paris",
            "code": "pa5"
        },
        {
            "text1": "Mexico",
            "text2": "Santiago de Querétaro",
            "code": "sqr"
        },
        {
            "text1": "United States",
            "text2": "Seattle",
            "code": "wbs"
        },
        {
            "text1": "South Korea",
            "text2": "Seoul",
            "code": "kx"
        },
        {
            "text1": "Singapore",
            "text2": "Singapore",
            "code": "sg1"
        },
        {
            "text1": "Australia",
            "text2": "Sydney",
            "code": "sy4"
        },
        {
            "text1": "Brazil",
            "text2": "São Paulo",
            "code": "sp3"
        },
        {
            "text1": "Israel",
            "text2": "Tel Aviv",
            "code": "bzi"
        },
        {
            "text1": "Japan",
            "text2": "Tokyo",
            "code": "cc1"
        },
        // {
        //     "text1": "Poland",
        //     "text2": "Warsaw",
        //     "code": "pl"
        // }
    ];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
