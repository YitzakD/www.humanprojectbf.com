<?php
/**
 * User: Yitzak DEKPEMOU
 */

if(isset($_SESSION['user_id']) && isset($_SESSION['pseudo'])) {

    header('Location:home.php');

    exit();

}