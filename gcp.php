<?php
require_once 'templating.php';
$name = 'GCP';
$longName = 'Google Cloud Platform';
ob_start();
?>
    <script>
        function src(region_id) {
            let region = regions[region_id];
            let cache_buster = "cache_buster=" + (+Date.now());

            var result = "https://" + region.code + '-5tkroniexa-' + region.code2 + `.a.run.app/api/ping?${cache_buster}`;
            return result;
        }

        // 404 is not a valid return. It's catch-all
        // https://us-south1-5tkroniexa-vp.a.run.app/api/ping
        // https://ch-africa-south1.storage.googleapis.com/probe/ping.js
        // https://africa-south1-5tkroniexa-bq.a.run.app/api/ping
        // https://africa-south1-5tkroniexa-bq.a.run.app/ping

        // https://gcping.com/api/endpoints
        // https://cloud.google.com/compute/docs/regions-zones
        // https://github.com/GoogleCloudPlatform/gcping/blob/main/internal/config/endpoints.go

        let regions = [{
            text1: "South Africa",
            text2: "Johannesburg",
            code: "africa-south1",
            code2: "bq",
        }, {
            text1: "Taiwan",
            text2: "Changhua County",
            code: "asia-east1",
            code2: "de",
        }, {
            text1: "Hong Kong",
            text2: "Hong Kong",
            code: "asia-east2",
            code2: "df",
        }, {
            text1: "Japan",
            text2: "Tokyo",
            code: "asia-northeast1",
            code2: "an",
        }, {
            text1: "Japan",
            text2: "Osaka",
            code: "asia-northeast2",
            code2: "dt",
        }, {
            text1: "South Korea",
            text2: "Seoul",
            code: "asia-northeast3",
            code2: "du",
        }, {
            text1: "India",
            text2: "Mumbai",
            code: "asia-south1",
            code2: "el",
        }, {
            text1: "India",
            text2: "Delhi",
            code: "asia-south2",
            code2: "em",
        }, {
            text1: "Singapore",
            text2: "Jurong West",
            code: "asia-southeast1",
            code2: "as",
        }, {
            text1: "Indonesia",
            text2: "Jakarta",
            code: "asia-southeast2",
            code2: "et",
        }, {
            text1: "Australia",
            text2: "Sydney",
            code: "australia-southeast1",
            code2: "ts",
        }, {
            text1: "Australia",
            text2: "Melbourne",
            code: "australia-southeast2",
            code2: "km",
        }, {
            text1: "Poland",
            text2: "Warsaw",
            code: "europe-central2",
            code2: "lm",
        }, {
            text1: "Finland",
            text2: "Hamina",
            code: "europe-north1",
            code2: "lz",
        }, {
            text1: "Sweden",
            text2: "Stockholm",
            code: "europe-north2",
            code2: "ma",
        }, {
            text1: "Spain",
            text2: "Madrid",
            code: "europe-southwest1",
            code2: "no",
        }, {
            text1: "Belgium",
            text2: "St. Ghislain",
            code: "europe-west1",
            code2: "ew",
        }, {
            text1: "Germany",
            text2: "Berlin",
            code: "europe-west10",
            code2: "oe",
        }, {
            text1: "Italy",
            text2: "Turin",
            code: "europe-west12",
            code2: "og",
        }, {
            text1: "UK",
            text2: "London",
            code: "europe-west2",
            code2: "nw",
        }, {
            text1: "Germany",
            text2: "Frankfurt",
            code: "europe-west3",
            code2: "ey",
        }, {
            text1: "Netherlands",
            text2: "Eemshaven",
            code: "europe-west4",
            code2: "ez",
        }, {
            text1: "Switzerland",
            text2: "Zürich",
            code: "europe-west6",
            code2: "oa",
        }, {
            text1: "Italy",
            text2: "Milan",
            code: "europe-west8",
            code2: "oc",
        }, {
            text1: "France",
            text2: "Paris",
            code: "europe-west9",
            code2: "od",
        }, {
            text1: "Qatar",
            text2: "Doha",
            code: "me-central1",
            code2: "ww",
        }, {
            text1: "Saudi Arabia",
            text2: "Dammam",
            code: "me-central2",
            code2: "wx",
        }, {
            text1: "Israel",
            text2: "Tel Aviv",
            code: "me-west1",
            code2: "zf",
        }, {
            text1: "Canada",
            text2: "Montreal",
            code: "northamerica-northeast1",
            code2: "nn",
        }, {
            text1: "Canada",
            text2: "Toronto",
            code: "northamerica-northeast2",
            code2: "pd",
        }, {
            text1: "México",
            text2: "Queretaro",
            code: "northamerica-south1",
            code2: "pv",
        }, {
            text1: "Brazil",
            text2: "São Paulo",
            code: "southamerica-east1",
            code2: "rj",
        }, {
            text1: "Chile",
            text2: "Santiago",
            code: "southamerica-west1",
            code2: "rj",
        }, {
            text1: "USA",
            text2: "Iowa",
            code: "us-central1",
            code2: "uc",
        }, {
            text1: "USA",
            text2: "South Carolina",
            code: "us-east1",
            code2: "ue",
        }, {
            text1: "USA",
            text2: "Northern Virginia",
            code: "us-east4",
            code2: "uk",
        }, {
            text1: "USA",
            text2: "Ohio",
            code: "us-east5",
            code2: "ul",
        }, {
            text1: "USA",
            text2: "Texas",
            code: "us-south1",
            code2: "vp",
        }, {
            text1: "USA",
            text2: "Oregon",
            code: "us-west1",
            code2: "uw",
        }, {
            text1: "USA",
            text2: "California",
            code: "us-west2",
            code2: "wl",
        }, {
            text1: "USA",
            text2: "Utah",
            code: "us-west3",
            code2: "wm",
        }, {
            text1: "USA",
            text2: "Nevada",
            code: "us-west4",
            code2: "wn",
        }];
    </script>
<?php
$body = ob_get_clean();
viewProvider();
?>
