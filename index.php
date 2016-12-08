<?php
/**
 * Developer: Yitzak DEKPEMOU
 */

session_start();

require "includes/init.php";
require "filters/auth.filter.php";

redirect('home.php');