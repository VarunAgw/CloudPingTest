<?php
require_once 'templating.php';
$name = 'Azure';
$longName = 'Microsoft Azure';
ob_start();
?>
<script>
    function src(region_id) {
        // Some region are https only regions
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code2 || regions[region_id].code;
        if (code == "westus3") {
            return `https://a1${code}.blob.core.windows.net/public/latency-test.json?${cache_buster}`;
        } else if (code == "swedencentral") {
            return `https://a8${code}.blob.core.windows.net/public/latency-test.json?${cache_buster}`;
        } else {
            return `https://av${code}.blob.core.windows.net/probe/ping.js?${cache_buster}`;
        }
    }

    var regions = [{
        text1: "United States",
        text2: "Central US",
        code: "centralus"
    }, {
        text1: "United States",
        text2: "East US 2",
        code: "eastus2"
    }, {
        text1: "United States",
        text2: "East US",
        code: "eastus"
    }, {
        text1: "United States",
        text2: "North Central US",
        code: "northcentralus"
    }, {
        text1: "United States",
        text2: "South Central US",
        code: "southcentralus"
    }, {
        text1: "United States",
        text2: "West US 2",
        code: "westus2"
    }, {
        text1: "United States",
        text2: "West US 3",
        code: "westus3"
    }, {
        text1: "United States",
        text2: "West Central US",
        code: "westcentralus"
    }, {
        text1: "United States",
        text2: "West US",
        code: "westus"
    }, {
        text1: "Canada",
        text2: "Canada Central",
        code: "canadacentral"
    }, {
        text1: "Canada",
        text2: "Canada East",
        code: "canadaeast"
    }, {
        text1: "Brazil",
        text2: "Brazil South",
        code: "brazilsouth"
    }, {
        text1: "Europe",
        text2: "North Europe",
        code: "northeurope"
    }, {
        text1: "Europe",
        text2: "West Europe",
        code: "westeurope"
    }, {
        text1: "France",
        text2: "France Central",
        code: "francecentral"
    }, {
        text1: "United Kingdom",
        text2: "UK South",
        code: "uksouth"
    }, {
        text1: "United Kingdom",
        text2: "UK West",
        code: "ukwest"
    }, {
        text1: "Germany",
        text2: "Germany North",
        code: "germanynorth"
    }, {
        text1: "Germany",
        text2: "Germany West Central",
        code: "germanywestcentral"
    }, {
        text1: "Switzerland",
        text2: "Switzerland North",
        code: "switzerlandnorth"
    }, {
        text1: "Switzerland",
        text2: "Switzerland West",
        code: "switzerlandwest"
    }, {
        text1: "Norway",
        text2: "Norway West",
        code: "norwaywest"
    }, {
        text1: "Norway",
        text2: "Norway East",
        code: "norwayeast"
    }, {
        text1: "Sweden",
        text2: "Sweden Central",
        code: "swedencentral"
    }, {
        text1: "Asia Pacific",
        text2: "East Asia",
        code: "eastasia"
    }, {
        text1: "Asia Pacific",
        text2: "Southeast Asia",
        code: "southeastasia"
    }, {
        text1: "Australia",
        text2: "Australia Central",
        code: "australiacentral"
    }, {
        text1: "Australia",
        text2: "Australia Central 2",
        code: "australiacentral2"
    }, {
        text1: "Australia",
        text2: "Australia East",
        code: "australiaeast"
    }, {
        text1: "Australia",
        text2: "Australia Southeast",
        code: "australiasoutheast"
    }, {
        text1: "India",
        text2: "Central India",
        code: "centralindia"
    }, {
        text1: "India",
        text2: "South India",
        code: "southindia"
    }, {
        text1: "India",
        text2: "West India",
        code: "westindia",
        code2: "indiawest9835"
    }, {
        text1: "Japan",
        text2: "Japan East",
        code: "japaneast"
    }, {
        text1: "Japan",
        text2: "Japan West",
        code: "japanwest"
    }, {
        text1: "Korea",
        text2: "Korea Central",
        code: "koreacentral"
    }, {
        text1: "Korea",
        text2: "Korea South",
        code: "koreasouth"
    }, {
        text1: "Africa",
        text2: "South Africa North",
        code: "southafricanorth"
    }, {
        text1: "Africa",
        text2: "South Africa West",
        code: "southafricawest"
    }, {
        text1: "United Arab Emirates",
        text2: "UAE Central",
        code: "uaecentral"
    }, {
        text1: "United Arab Emirates",
        text2: "UAE North",
        code: "uaenorth"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
