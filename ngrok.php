<?php
require_once 'templating.php';
$name = 'ngrok';
$longName = 'ngrok';
ob_start();
?>
<script>
    function src(region_id) {
        // GovCloud are https only regions
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code2 !== undefined ? regions[region_id].code2 : regions[region_id].code;
        if (code.length > 0) {
            code += ".";
        }
        return `https://ping.${code}ngrok.io/`;
    }

    var regions = [{
        text1: "United States",
        text2: "",
        code: "us",
        code2: "",
    }, {
        text1: "Europe",
        text2: "",
        code: "eu"
    }, {
        text1: "Asia/Pacific",
        text2: "",
        code: "ap"
    }, {
        text1: "Australia",
        text2: "",
        code: "au"
    }, {
        text1: "South America",
        text2: "",
        code: "sa"
    }, {
        text1: "Japan",
        text2: "",
        code: "jp"
    }, {
        text1: "India",
        text2: "",
        code: "in"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
