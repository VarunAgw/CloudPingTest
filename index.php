<?php
require_once 'templating.php';
ob_start();
?>

<?= contactLine(); ?>

    <ul>
        <li><h2><a href="aws">AWS (Amazon Web Services)</a></h2>
        <li><h2><a href="azure">Azure (Microsoft Azure)</a></h2>
        <li><h2><a href="contabo">Contabo</a></h2>
        <li><h2><a href="coreweave">CoreWeave</a></h2>
        <li><h2><a href="digital_ocean">Digital Ocean</a></h2>
<!--        <li><h2><a href="dns">DNS</a></h2>-->
        <li><h2><a href="gcore">Gcore</a></h2>
        <li><h2><a href="gcp">GCP (Google Cloud Platform)</a></h2>
        <li><h2><a href="hetzner">Hetzner</a></h2>
        <li><h2><a href="ibm_cloud">IBM Cloud</a></h2>
        <li><h2><a href="linode">Linode</a></h2>
<!--        <li><h2><a href="ngrok">ngrok</a></h2>-->
        <li><h2><a href="oracle">Oracle Cloud</a></h2>
        <li><h2><a href="ovhcloud">OVHCloud</a></h2>
<!--        <li><h2><a href="upcloud">Upcloud</a></h2>-->
        <li><h2><a href="scaleway">Scaleway</a></h2>
        <li><h2><a href="servers_com">servers.com</a></h2>
        <li><h2><a href="vultr">Vultr</a></h2>
    </ul>
<?php
$body = ob_get_clean();
listProviders();

require_once 'Footer.php';
