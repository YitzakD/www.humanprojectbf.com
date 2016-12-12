<?php $title = $menu['home'][$_SESSION['locale']]; ?>
<?php include("partials/_header.php"); ?>

<div class="dev-wrap">

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/aboutus/_submenu.php"; ?>
    </div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/aboutus/_banners.php"; ?>
    </div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/aboutus/_presentation.php"; ?>
        <?php include "partials/aboutus/_missions.php"; ?>
        <?php include "partials/aboutus/_goals.php"; ?>
    </div>

    <div class="clearer margin-top-2x"></div>

    <div class="dev-col-max-big-plus no-margin relatived">
        <?php include "partials/home/_browse.patners.php"; ?>
    </div>

<?php include("partials/_footer.php"); ?>
