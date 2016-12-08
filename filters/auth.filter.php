<?php
/**
 * User: Yitzak DEKPEMOU
 */

if(!isset($_SESSION['user_id']) || !isset($_SESSION['pseudo'])) {

    $_SESSION['fowarding_url'] = $_SERVER['REQUEST_URI'];

    header('Location:home.php');

    exit();

}
