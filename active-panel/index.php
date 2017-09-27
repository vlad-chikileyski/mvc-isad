<?php
//1. Global setting
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('session.cookie_domain', '.adtoday.co.uk');
session_start();
//2. Include files system
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');
//4. Call Router - class
$router = new Router();
$router->run();