<?php
// FRONT CONTROLLER

//1. Global setting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Include files system
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//3. DB - connection


//4. Call Router - class
$router = new Router();
$router->run();