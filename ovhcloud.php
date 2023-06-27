<?php
require_once 'templating.php';
$name = 'OVHcloud';
$longName = 'OVHcloud';
ob_start();
?>
<script>
    function src(region_id) {
        // GovCloud are https only regions
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code2 !== undefined ? regions[region_id].code2 : regions[region_id].code;
        return `https://${code}.nperf.net/`;
    }

    // https://ws.nperf.com/partner/frame?l=05d1f5db-f38f-42ed-924b-87e3b0f2d5b6

    var regions = [{
        text1: "France",
        text2: "Roubaix",
        code: "fr-ovh-roubaix",
        code2: "fr-ovh-roubaix-02-10g",
    }, {
        text1: "France",
        text2: "Strasbourg",
        code: "fr-ovh-strasbourg",
        code2: "fr-ovh-strasbourg-02-10g"
    }, {
        text1: "Canada",
        text2: "Beauharnois",
        code: "ca-ovh-beauharnois",
        code2: "ca-ovh-beauharnois-02-10g"
    }, {
        text1: "France",
        text2: "Gravelines",
        code: "fr-ovh-gravelines",
        code2: "fr-ovh-gravelines-02-10g"
    }, {
        text1: "United Kingdom",
        text2: "Erith",
        code: "gb-ovh-erith",
        code2: "gb-ovh-erith-01-10g"
    }, {
        text1: "Germany",
        text2: "Limburg",
        code: "de-ovh-limburg",
        code2: "de-ovh-limburg-01-10g"
    }, {
        text1: "Poland",
        text2: "Warsaw",
        code: "pl-ovh-warsaw",
        code2: "pl-ovh-warsaw-01-10g"
    }, {
        text1: "Australia",
        text2: "Sydney",
        code: "au-ovh-sydney",
        code2: "au-ovh-sydney-01-10g"
    }, {
        text1: "Singapore",
        text2: "Singapore",
        code: "sg-ovh-singapore",
        code2: "sg-ovh-singapore-01-10g"
    }, {
        text1: "United States",
        text2: "Hillsboro",
        code: "us-ovh-hillsboro",
        code2: "us-ovh-hillsboro-01-10g"
    }, {
        text1: "United States",
        text2: "Vint Hill",
        code: "us-ovh-vinthill",
        code2: "us-ovh-vinthill-01-10g"
    }, {
        text1: "India",
        text2: "Mumbai",
        code: "in-ovh-mumbai",
        code2: "in-ovh-mumbai-01-10g-1"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
