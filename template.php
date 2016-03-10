<!DOCTYPE html>
<?php 
$name = "world";
?>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/productstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/registerstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/shopstyle.css" />
    <title>VB BV. voor al uw VerkeersBorden</title>
</head>

<body>
    <?php require('cartformsmall.php')?>
    <header>
        <?php
        require 'logo.php';
        ?>

        <?php
        require 'loginForm.php';
        ?>

        <?php
        require 'navbar.php';
        ?>
    </header>

    <div class="content">
        <?php echo $content ?>
    </div>

    <?php
    require 'advertisement.php';
    ?>

    <?php
    require 'footer.php';
    ?>
</body>
</html>
