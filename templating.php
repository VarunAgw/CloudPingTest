<?php

function __($str)
{
	return htmlspecialchars($str);
}

function __meta()
{
	ob_start();
	?>
    <link rel="canonical"
          href="<?= "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}" ?>"/>

	<?php
	return ob_get_clean();
}

function __styles()
{
	ob_start();
	?>
    <style>
        tr {
            white-space: nowrap;
        }

        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }

        table.dataTable {
            width: initial !important;
            margin: initial !important;
        }

        .dataTables_wrapper .dataTables_filter {
            float: left !important;
        }
    </style>
	<?php
	return ob_get_clean();
}

function __scripts()
{
	ob_start();
	?>
	<!--
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5796013165547211"
         crossorigin="anonymous"></script>
	-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131004323-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-131004323-2');
    </script>
    <script type="text/javascript">
        // var _paq = window._paq || [];
        // /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        // _paq.push(['trackPageView']);
        // _paq.push(['enableLinkTracking']);
        // (function () {
        //     var u = "//dev.varunagw.com/matomo/";
        //     _paq.push(['setTrackerUrl', u + 'matomo.php']);
        //     _paq.push(['setSiteId', '2']);
        //     var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        //     g.type = 'text/javascript';
        //     g.async = true;
        //     g.defer = true;
        //     g.src = u + 'matomo.js';
        //     s.parentNode.insertBefore(g, s);
        // })();
    </script>
    <script src="jquery-3.4.1.js"></script>
    <script>
        (async function () {
//            let json = await $.get("http://ip-api.com/json/");
//            if (json.countryCode == "") {
//                $("body").html("<h1><h1>")
//            }
        })();
    </script>
	<?php
	return ob_get_clean();
}

function listProviders()
{
	global $body;
	?>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Cloud Ping Test (Latency) for different providers like AWS, Azure, GCP</title>
        <meta name="description"
              content="Test ping time (latency) for different cloud providers like AWS, Azure, GCP, Digital Ocean from your web browser.">
		<?= __meta() ?>
		<?= __styles() ?>
		<?= __scripts() ?>
    </head>
    <body>
    <h1>Test ping time (latency) for different cloud providers like AWS, Azure, GCP, Digital Ocean from your web browser.</h1>
	<?= $body ?>
    </body>
    </html>
	<?php
}

function contactLine()
{
	ob_start();
	?>
    <b>Missing your favourite cloud provider or a specific region?</b> Submit the <a target="_blank" href="https://github.com/VarunAgw/CloudPingTest/discussions?discussions_q=">request here</a>.
<?php //    Also contact for <a href="https://varunagw.com/contact">freelancing projects</a>.
?>
    <br>
	<?php
	return ob_get_clean();
}

function viewProvider()
{
	global $name, $longName, $body;
	?>
    <html>
    <head>
        <meta charset="utf-8">
        <title><?= __($name) ?> Ping Test (Latency) | Cloud Ping Test</title>
        <meta name="description"
              content="Test ping time for different <?= __($longName == $name ? $name : "$name ($longName)") ?> regions from your web browser">
		<?= __meta() ?>
		<?= __styles() ?>
		<?= __scripts() ?>
    </head>
    <body>
    <h1><?= __($name) ?> Ping Test (Latency)</h1>
	<?= contactLine(); ?>
    Compare ping (latency) for <a href="./">other cloud providers</a>.<br>
    <br>
    <b>Note: Sorting will be enabled after you press Stop.</b>
    <table border=1 cellpadding=10 cellspacing=0 class="">
        <thead>
        <tr class="heading">
            <th class="info region_index">#</th>
            <th class="info region_name"><?= __($name) ?> Region Name</th>
            <th class="info region_code">Region Code</th>
            <th class="stats region_mean">Mean</th>
            <th class="stats region_median">Median</th>
            <th class="stats region_lowest">Min</th>
            <th class="stats region_highest">Max</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <br>
    <button style="font-size: 50px" disabled="disabled" onclick="">Stop That!</button>
	<?= $body ?>
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="numString.js"></script>
    <script src="script.js"></script>
    </body>
    </html>
	<?php
}
