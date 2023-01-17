<?php

require_once '../vendor/autoload.php';
const BASE_PATH = __DIR__ . "/../app/";

use app\core\Router;


$route = new Router;

$path = trim($_SERVER['REQUEST_URI'], '/');
//* PHP_URL_PATH to remove the ?create
$path = parse_url($path, PHP_URL_PATH);

$route->get('', 'views/sign_in.view.php');
$route->get('sign_up', 'views/sign_up.view.php');
$route->get('about', 'views/about.php');

$route->post('sign_up/create', 'includes/sign_up.inc.php');
$route->post('create', 'includes/sign_in.inc.php');




require $route->run($path);
