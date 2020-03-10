<!doctype html>
<html lang="de">
<head>
    <?php
    $themeDirectory = get_stylesheet_directory_uri();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>CARMINGA</title>
    <?php wp_head() ?>
</head>


<body>
<div class="content-box">
    <div class="header">
        <div class="header-logo-container">
            <img class="header-logo" src="<?php echo $themeDirectory; ?>/images/logo-horizontal.svg" alt="Carminga logo">
        </div>
    </div>
    <div class="intro">
        <p class="text-center intro-head">Autoverkaufen?</p>
        <p class="intro-text">Leicht gemacht mit Carminga und wirkaufendeinauto.de</p>
    </div>
    <div class="page-thumbnail">
        <img src="<?php echo $themeDirectory; ?>/images/bitmap.jpg" alt="working people" class="img-fluid">
    </div>

