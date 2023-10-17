<?php
require_once 'templating.php';
$name = 'Oracle Cloud';
$longName = $name;
ob_start();
?>
    <script>
        function src(region_id) {
            let cache_buster = "cache_buster=" + (+Date.now());

            let code = regions[region_id].codehar || regions[region_id].code;
            return `https://objectstorage.${code}.oraclecloud.com/ping`;

        }

        // https://docs.oracle.com/en-us/iaas/Content/General/Concepts/regions.htm
        var regions = [{
            text1: "Australia East",
            text2: "Sydney",
            code: "ap-sydney-1"
        }, {
            text1: "Australia Southeast",
            text2: "Melbourne",
            code: "ap-melbourne-1"
        }, {
            text1: "Brazil East",
            text2: "Sao Paulo",
            code: "sa-saopaulo-1"
        }, {
            text1: "Brazil Southeast",
            text2: "Vinhedo",
            code: "sa-vinhedo-1"
        }, {
            text1: "Canada Southeast",
            text2: "Montreal",
            code: "ca-montreal-1"
        }, {
            text1: "Canada Southeast",
            text2: "Toronto",
            code: "ca-toronto-1"
        }, {
            text1: "Chile",
            text2: "Santiago",
            code: "sa-santiago-1"
        }, {
            text1: "France Central",
            text2: "Paris",
            code: "eu-paris-1"
        }, {
            text1: "France South",
            text2: "Marseille",
            code: "eu-marseille-1"
        }, {
            text1: "Germany Central",
            text2: "Frankfurt",
            code: "eu-frankfurt-1"
        }, {
            text1: "India South",
            text2: "Hyderabad",
            code: "ap-hyderabad-1"
        }, {
            text1: "India West",
            text2: "Mumbai",
            code: "ap-mumbai-1"
        }, {
            text1: "Israel Central",
            text2: "Jerusalem",
            code: "il-jerusalem-1"
        }, {
            text1: "Italy Northwest",
            text2: "Milan",
            code: "eu-milan-1"
        }, {
            text1: "Japan Central",
            text2: "Osaka",
            code: "ap-osaka-1"
        }, {
            text1: "Japan East",
            text2: "Tokyo",
            code: "ap-tokyo-1"
        }, {
            text1: "Mexico Central",
            text2: "Queretaro",
            code: "mx-queretaro-1"
        }, {
            text1: "Mexico Northeast",
            text2: "Monterrey",
            code: "mx-monterrey-1"
        }, {
            text1: "Netherlands Northwest",
            text2: "Amsterdam",
            code: "eu-amsterdam-1"
        }, {
            text1: "Saudi Arabia West",
            text2: "Jeddah",
            code: "me-je
            //     text1: "Serbia Central",
            //     text2: "Jovanovac",
            //     code: "eu-ddah-1"
        // }, {jovanovac-1"
        }, {
            text1: "Singapore",
            text2: "Singapore",
            code: "ap-singapore-1"
        }, {
            text1: "South Africa Central",
            text2: "Johannesburg",
            code: "af-johannesburg-1"
        }, {
            text1: "South Korea Central",
            text2: "Seoul",
            code: "ap-seoul-1"
        }, {
            text1: "South Korea North",
            text2: "Chuncheon",
            code: "ap-chuncheon-1"
        }, {
            text1: "Spain Central",
            text2: "Madrid",
            code: "eu-madrid-1"
        }, {
            text1: "Sweden Central",
            text2: "Stockholm",
            code: "eu-stockholm-1"
        }, {
            text1: "Switzerland North",
            text2: "Zurich",
            code: "eu-zurich-1"
        }, {
            text1: "UAE Central",
            text2: "Abu Dhabi",
            code: "me-abudhabi-1"
        }, {
            text1: "UAE East",
            text2: "Dubai",
            code: "me-dubai-1"
        }, {
            text1: "UK South",
            text2: "London",
            code: "uk-london-1"
        }, {
            text1: "UK West",
            text2: "Newport",
            code: "uk-cardiff-1"
        }, {
            text1: "US East",
            text2: "Ashburn",
            code: "us-ashburn-1"
        }, {
            text1: "US Midwest",
            text2: "Chicago",
            code: "us-chicago-1"
        }, {
            text1: "US West",
            text2: "Phoenix",
            code: "us-phoenix-1"
        }, {
            text1: "US West",
            text2: "San Jose",
            code: "us-sanjose-1"
        }];
    </script>
<?php
$body = ob_get_clean();
viewProvider();
?>