<?php
require_once 'templating.php';
$name = 'AWS';
$longName = 'Amazon Web Services';
ob_start();
?>
<script>
    function src(region_id) {
        // https://us-west-1.console.aws.amazon.com/console/home?region=us-west-1#
        // GovCloud are https only regions
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code;
        return `https://ec2.${code}.amazonaws.com/ping?${cache_buster}`;
    }

    var regions = [{
        text1: "US East",
        text2: "N. Virginia",
        code: "us-east-1"
    }, {
        text1: "US East",
        text2: "Ohio",
        code: "us-east-2"
    }, {
        text1: "US West",
        text2: "N. California",
        code: "us-west-1"
    }, {
        text1: "US West",
        text2: "Oregon",
        code: "us-west-2"
    }, {
        text1: "Africa",
        text2: "Cape Town",
        code: "af-south-1"
    }, {
        text1: "Asia Pacific",
        text2: "Hong Kong",
        code: "ap-east-1"
    }, {
        text1: "Asia Pacific",
        text2: "Hyderabad",
        code: "ap-south-2"
    }, {
        text1: "Asia Pacific",
        text2: "Jakarta",
        code: "ap-southeast-3"
    }, {
        text1: "Asia Pacific",
        text2: "Mumbai",
        code: "ap-south-1"
    }, {
        text1: "Asia Pacific",
        text2: "Osaka",
        code: "ap-northeast-3"
    }, {
        text1: "Asia Pacific",
        text2: "Seoul",
        code: "ap-northeast-2"
    }, {
        text1: "Asia Pacific",
        text2: "Singapore",
        code: "ap-southeast-1"
    }, {
        text1: "Asia Pacific",
        text2: "Sydney",
        code: "ap-southeast-2"
    }, {
        text1: "Asia Pacific",
        text2: "Tokyo",
        code: "ap-northeast-1"
    }, {
        text1: "Canada",
        text2: "Central",
        code: "ca-central-1"
    }, {
        text1: "Europe",
        text2: "Frankfurt",
        code: "eu-central-1"
    }, {
        text1: "Europe",
        text2: "Ireland",
        code: "eu-west-1"
    }, {
        text1: "Europe",
        text2: "London",
        code: "eu-west-2"
    }, {
        text1: "Europe",
        text2: "Milan",
        code: "eu-south-1"
    }, {
        text1: "Europe",
        text2: "Paris",
        code: "eu-west-3"
    }, {
        text1: "Europe",
        text2: "Spain",
        code: "eu-south-2"
    }, {
        text1: "Europe",
        text2: "Stockholm",
        code: "eu-north-1"
    }, {
        text1: "Europe",
        text2: "Zurich",
        code: "eu-central-2"
    }, {
        text1: "Middle East",
        text2: "Bahrain",
        code: "me-south-1"
    }, {
        text1: "Middle East",
        text2: "UAE",
        code: "me-central-1"
    }, {
        text1: "South America",
        text2: "São Paulo",
        code: "sa-east-1"
        // }, {
        //     text1: "AWS GovCloud",
        //     text2: "US-East",
        //     code: "us-gov-east-1"
        // }, {
        //     text1: "AWS GovCloud",
        //     text2: "US",
        //     code: "us-gov-west-1"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
