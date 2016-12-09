<?php $title = $menu['home'][$_SESSION['locale']]; ?>
<?php include("partials/_header.php"); ?>

<div class="dev-wrap">

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/home/_banners.php"; ?>
    </div>

    <div class="clearer margin-top-lg"></div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/home/_browse.category.php"; ?>
    </div>

    <div class="clearer margin-top-lg"></div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <div class="hp-block no-margin">
            <div class="dev-col-min-big float-left">
              <?php include "partials/home/_browse.jobs-left.php"; ?>
              <?php include "partials/home/_browse.galery.php"; ?>
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
