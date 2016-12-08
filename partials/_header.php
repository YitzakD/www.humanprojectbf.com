<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Carrière, Entreprise">
    <meta name="author" content="Yitzak DEKPEMOU - DEVAfrika">
    <link rel="icon" href="assets/media/uses/icon.png">

    <title>
        <?=
        isset($title)
            ? $title . ' - ' . WEBSITE_NAME
            : WEBSITE_NAME . ', L\'expérience, notre atout.';
        ?>
    </title>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/dafstyle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hp-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hp-slide-style.css">
</head>
<body>
<div class="wrap">
<?php include("partials/main/_main.nav.php"); ?>
<?php include("partials/_flash.php"); ?>
<?php include("partials/_errors.php"); ?>