<!DOCTYPE html>
<html>
<head>
    <?php
        $archivo_actual = basename($_SERVER['PHP_SELF']);

        switch($archivo_actual){
            case "index.php": echo "<title>ColorssPalette</title>";

                break;
            case "palette.php": echo "<title>Palette - ColorssPalette</title>";

                break;
            default: echo "<title>ColorssPalette</title>";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo url::getRaiz()?>/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo url::getRaiz()?>/img/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/colorsspalette.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url::getRaiz()?>/css/style.css">
</head>
<body>
<div class="wrap">

