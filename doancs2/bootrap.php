<?php
define("_DIR_ROOT",__DIR__);
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
$web_root = 'https://'.$_SERVER['HTTP_HOST'];
}else {
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}
$array =    explode('\\', _DIR_ROOT);
$web_root = $web_root.'/'.'php/'.end($array);
define('_WEB_ROOT_', $web_root);
if(file_exists("app/core/DB.php")){
    require_once "app/core/DB.php";
}
require_once 'app/configs/routes.php';
require_once 'app/core/Route.php';
require_once "app/core/Controller.php";
require_once "app/models/Basemodel.php";
require_once 'app/App.php';

?>