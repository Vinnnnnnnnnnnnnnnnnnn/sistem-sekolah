<?php 
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();

//Register Routes
$router->add('GET','/students','StudentConroller','index');
$router->add('GET','/students/create','StudentConroller','create');
$router->add('GET','/students/create','StudentConroller','create');
$router->run();
?>