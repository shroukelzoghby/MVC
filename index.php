<?php 
echo"index";

//require_once "core/Router.php";
use core\Router;
require_once"vendor/autoload.php";
$router=new Router();
$router->get('about',"PageController@about");