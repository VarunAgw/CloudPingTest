<?php
require_once 'templating.php';
$name = 'CoreWeave';
$longName = 'CoreWeave';
ob_start();
?>
<script>
    function src(region_id) {
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code.toLowerCase();
        return `https://http.speedtest.las1.coreweave.com/ping?${cache_buster}`;

        // https://http.speedtest.ord1.coreweave.com/ping

        // https://docs.coreweave.com/welcome-to-coreweave/data-center-regions
    }

    let regions = [{
        text1: "US East",
        text2: "Weehawken, NJ",
        code: "LGA1",
    }, {
        text1: "US Central",
        text2: "Chicago, IL",
        code: "ORD1",
    }, {
        text1: "US West",
        text2: "Las Vegas, NV",
        code: "LAS1",
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
