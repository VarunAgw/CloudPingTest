<?php
require_once 'templating.php';
$name = 'Scaleway';
$longName = 'Scaleway';
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        return `https://s3.${regions[region_id].code}.scw.cloud/?${cache_buster}`;
    }

    // https://registry.terraform.io/providers/scaleway/scaleway/latest/docs/guides/regions_and_zones#zones

    let regions = [{
        text1: "France",
        text2: "PAR",
        code: "fr-par"
    }, {
        text1: "Netherlands",
        text2: "AMS",
        code: "nl-ams"
    }, {
        text1: "Poland",
        text2: "WAW",
        code: "pl-waw"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
