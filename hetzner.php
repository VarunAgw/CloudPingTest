<?php
require_once 'templating.php';
$name = 'Hetzner';
$longName = $name;
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code;
        return `https://${code}-speed.hetzner.com/?${cache_buster}`;
    }

    // https://docs.hetzner.com/cloud/general/locations/

    let regions = [{
        text1: "Germany",
        text2: "Falkenstein",
        code: "fsn1"
    }, {
        text1: "Germany",
        text2: "Nuremberg",
        code: "nbg1"
    }, {
        text1: "Finland",
        text2: "Helsinki",
        code: "hel1"
    }, {
        text1: "United States",
        text2: "Ashburn, VA",
        code: "ash"
    }, {
        text1: "United States",
        text2: "Hillsboro, OR",
        code: "hil"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
