<?php
require_once 'templating.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Donations | Cloud Ping Test</title>
    <meta name="description" content="Test ping time for different regions from your web browser">
    <?= __meta() ?>
    <?= __styles() ?>
    <?= __scripts() ?>
    <style>
        .container {
            display: grid;
            grid-template-columns: 0.3fr 0.3fr; /* Two equal columns */
            gap: 20px; /* Space between sections */
            margin-top: 20px;
        }

        .section {
            border: 0px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            /*text-align: center;*/
            padding-top: 0px;

        }

        .section h1 {
            margin-bottom: 10px;
        }

        .section ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            font-size: 25px;
        }
    </style>
</head>
<body>

<h1>Contributors</h1>
<?= contactLine(); ?>
Compare ping (latency) for <a href="./">other cloud providers</a>.<br>

<!-- Side-by-Side Sections -->
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
        </ul>
    </div>
</div>
<?php
require_once 'Footer.php';
?>
</body>
</html>
