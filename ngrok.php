<?php

http_response_code(404);
die();

require_once 'templating.php';
$name = 'ngrok';
$longName = 'ngrok';
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        return `https://ping.${regions[region_id].code}.ngrok.io/${cache_buster}`;
    }

    let regions = [{
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
