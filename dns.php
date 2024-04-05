<?php
http_response_code(404);
die;

require_once 'templating.php';
$name = 'DNS';
$longName = 'Domain Name System';
ob_start();
?>
<script>
    function src(region_id) {
        let code = regions[region_id].code || regions[region_id].text2;
        return "https://" + code + "/media/manifest.json?cache_buster=" + Date.now();
    }

    let regions = [{
        text1: "Google",
        text2: "8.8.8.8",
    }, {
        text1: "Google",
        text2: "8.8.4.4",
    }, {
        text1: "Cloudflare",
        text2: "1.1.1.1",
    }, {
        text1: "Cloudflare",
        text2: "1.0.0.1",
    }, {
        text1: "OpenDNS",
        text2: "208.67.222.123",
    }, {
        text1: "OpenDNS",
        text2: "208.67.220.123",
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
