<?php
// FRONT CONTROLLER

//1. Global setting
ini_set('display_errors', 1);
error_reporting(E_ALL);




ini_set('session.cookie_domain', '.adtoday.co.uk' );
session_start();


print_r($_SESSION);

//2. Include files system
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

//3. DB - connection


//4. Call Router - class
$router = new Router();
$router->run();