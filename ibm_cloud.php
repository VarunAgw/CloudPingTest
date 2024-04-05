<?php
require_once 'templating.php';
$name = 'IBM Cloud';
$longName = 'IBM Cloud';
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code;
        return `https://s3.${code}.cloud-object-storage.appdomain.cloud/?${cache_buster}`;
    }

    // You have to scroll down to see some more regions like Osaka
    // https://cloud.ibm.com/docs/cloud-object-storage?topic=cloud-object-storage-endpoints

    // https://cloud.ibm.com/docs/overview?topic=overview-locations

    let regions = [{
        text1: "Americas",
        text2: "Dallas",
        code: "us-south"
    }, {
        text1: "Americas",
        text2: "Sao Paulo",
        code: "br-sao"
    }, {
        text1: "Americas",
        text2: "Toronto",
        code: "ca-tor"
    }, {
        text1: "Americas",
        text2: "Washington DC",
        code: "us-east"
    }, {
        text1: "Europe",
        text2: "Frankfurt",
        code: "eu-de"
    }, {
        text1: "Europe",
        text2: "London",
        code: "eu-gb"
    }, {
        text1: "Europe",
        text2: "Madrid",
        code: "eu-es"
    }, {
        text1: "Asia Pacific",
        text2: "Sydney",
        code: "au-syd"
    }, {
        text1: "Asia Pacific",
        text2: "Tokyo",
        code: "jp-tok"
    }, {
        text1: "Asia Pacific",
        text2: "Osaka",
        code: "jp-osa"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
