<?php $title = $menu['pres'][$_SESSION['locale']]; ?>
<?php include("partials/_header.php"); ?>

<div class="dev-wrap">

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/home/_banners.php"; ?>
    </div>

    <div class="clearer margin-top-lg"></div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <div class="hp-block no-margin">
            <div class="dev-col-min-big float-left">
                <?php include "partials/aboutus/presentation.html"; ?>
                <?php include "partials/aboutus/missions.html"; ?>
                <?php include "partials/aboutus/objectifs.html"; ?>
            </div>
            <div class="dev-col-max-small float-right">
                <?php include "partials/home/_browse.jobs-right.php"; ?>
            </div>
        </div>
    </div>

    <div class="clearer margin-top-2x"></div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/home/_browse.patners.php"; ?>
    </div>

    <?php include("partials/_footer.php"); ?>
