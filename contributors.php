<?php
require_once 'templating.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Contributors | Cloud Ping Test</title>
    <meta name="description"
          content="Test ping time for different regions from your web browser">
    <?= __meta() ?>
    <?= __styles() ?>
    <?= __scripts() ?>
</head>
<body>
<h1>Contributors</h1>
<?= contactLine(); ?>
Compare ping (latency) for <a href="./">other cloud providers</a>.<br>
<div class="container">
    <!-- Contributors Section -->
    <div class="section">
        <h1>Contributors:</h1>
        <ul>
            <li>Varun Agrawal</li>
            <li>Patrick Hartman</li>
            <li>Curious George</li>
            <li>Paz Aricha</li>
        </ul>
    </div>

    <!-- Donors Section -->
    <div class="section">
        <h1>Donors:</h1>
        <ul>
            <li>Brian Ruff</li>
            <li>Gabriel Tapias</li>
            <li>Octavio Perez</li>
            <li>Przemysław Romanik</li>
        </ul>
    </div>
</div>
<?= __footer() ?>
</body>
</html>
