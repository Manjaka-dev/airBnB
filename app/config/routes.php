<?php

use app\controllers\ApiExampleController;
use app\controllers\WelcomeController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */


$router->get('/', function() {
	Flight::render('home');
});

$router->get('/test', function() {
	Flight::render('sing-in');
});
