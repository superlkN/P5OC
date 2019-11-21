<?php

/*** Configuration ***/

ini_set('display_errors', 'on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'.$host.'/P5OC/site/');
define('ROOT', $root.'/P5OC/site/');

define('CONTROLLER', ROOT.'controller/');
define('VIEW', ROOT.'view/');
define('MODEL', ROOT.'model/');

define('ASSETS', HOST.'assets/css/');

define("DBDRIVER", "mysql");
define("DBHOST", "localhost");
define("DBNAME", "p5oc");
define("DBCHARSET", "utf8");
define("DBUSER", "root");
define("DBPASSWD", "");