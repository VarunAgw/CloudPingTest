<?php
require_once 'templating.php';
$name = 'Azure';
$longName = 'Microsoft Azure';
ob_start();
?>
<script>
    function src(region_id) {
        // https://www.azurespeed.com/Azure/Latency
        let cache_buster = "cache_buster=" + (+Date.now());

        let code = regions[region_id].code2 || regions[region_id].code;
        if (regions[region_id].code2) {
            return `https://${code}.blob.core.windows.net/cb.json?${cache_buster}`;
        } else {
            return `https://s3${code}.blob.core.windows.net/public/latency-test.json?${cache_buster}`;
        }
    }

    var regions = [{
        text1: "Australia",
        text2: "Australia Central",
        code: "australiacentral"
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
        text1: "Asia Pacific",
        text2: "East Asia",
        code: "eastasia"
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
        text1: "Asia Pacific",
        text2: "Southeast Asia",
        code: "southeastasia"
    }, {
        text1: "India",
        text2: "South India",
        code: "southindia"
    }, {
        text1: "India",
        text2: "West India",
        code: "westindia",
    }, {
        text1: "Brazil",
        text2: "Brazil South",
        code: "brazilsouth"
    }, {
        text1: "Canada",
        text2: "Canada Central",
        code: "canadacentral",
        code2: "speedtestcac"
    }, {
        text1: "Canada",
        text2: "Canada East",
        code: "canadaeast"
    }, {
        text1: "United States",
        text2: "Central US",
        code: "centralus"
    }, {
        text1: "United States",
        text2: "East US",
        code: "eastus"
    }, {
        text1: "United States",
        text2: "East US 2",
        code: "eastus2"
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
        text2: "West Central US",
        code: "westcentralus"
    }, {
        text1: "United States",
        text2: "West US",
        code: "westus"
    }, {
        text1: "United States",
        text2: "West US 2",
        code: "westus2"
    }, {
        text1: "United States",
        text2: "West US 3",
        code: "westus3"
    }, {
        text1: "France",
        text2: "France Central",
        code: "francecentral"
    }, {
        text1: "Germany",
        text2: "Germany West Central",
        code: "germanywestcentral"
    }, {
        text1: "Europe",
        text2: "North Europe",
        code: "northeurope"
    }, {
        text1: "Norway",
        text2: "Norway East",
        code: "norwayeast"
    }, {
        text1: "Poland",
        text2: "Poland Central",
        code: "polandcentral",
        code2: "speedtestplc"
    }, {
        text1: "Sweden",
        text2: "Sweden Central",
        code: "swedencentral"
    }, {
        text1: "Switzerland",
        text2: "Switzerland North",
        code: "switzerlandnorth"
    }, {
        text1: "United Kingdom",
        text2: "UK South",
        code: "uksouth"
    }, {
        text1: "United Kingdom",
        text2: "UK West",
        code: "ukwest"
    }, {
        text1: "Europe",
        text2: "West Europe",
        code: "westeurope"
    }, {
        text1: "Qatar",
        text2: "Qatar Central",
        code: "qatarcentral"
    }, {
        text1: "United Arab Emirates",
        text2: "UAE North",
        code: "uaenorth",
    }, {
        text1: "Africa",
        text2: "South Africa North",
        code: "southafricanorth"
        // }, {
        //     text1: "Brazil",
        //     text2: "Brazil Southeast",
        //     code: "brazilsoutheast"
        // }, {
        //     text1: "Germany",
        //     text2: "Germany North",
        //     code: "germanynorth"
        // }, {
        //     text1: "Switzerland",
        //     text2: "Switzerland West",
        //     code: "switzerlandwest"
        // }, {
        //     text1: "Norway",
        //     text2: "Norway West",
        //     code: "norwaywest"
        // }, {
        //     text1: "Africa",
        //     text2: "South Africa West",
        //     code: "southafricawest"
        // }, {
        //     text1: "United Arab Emirates",
        //     text2: "UAE Central",
        //     code: "uaecentral"
    }];
</script>
<?php
$body = ob_get_clean();
viewProvider();
?>
