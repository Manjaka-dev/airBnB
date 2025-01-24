<?php

use app\controllers\AdminController;
use flight\Engine;
use flight\net\Router;
use app\controllers\UserController;

/** 
 * @var Router $router 
 * @var Engine $app
 */


$router->get('/', function() {
	Flight::render('home');
});
$router->group('/user', function() use ($router) {
	$loging_cont = new UserController();

	$router->get('/accueil', [ $loging_cont, 'getAcceuilUser' ]);

	$router->get('/log-in', [ $loging_cont, 'getLogin' ]);

	$router->post('/login-check', [ $loging_cont, 'login' ]);

	$router->get('/sign-in', [ $loging_cont, 'getInscription' ]);

	$router->post('/inscription-check', [ $loging_cont, 'register' ]);
});

$router->group('/admin', function() use ($router) {
	$loging_cont = new AdminController();

	$router->get('/accueil', [ $loging_cont, 'getAccueilAdmin' ]);

	$router->get('/log-in', [ $loging_cont, 'getLogin' ]);

	$router->post('/login-check', [ $loging_cont, 'login' ]);

	$router->get('/sign-in', [ $loging_cont, 'getInscription' ]);

	$router->post('/inscription-check', [ $loging_cont, 'register' ]);
});


$router->get('/compare', function() {
	Flight::render('sign-in');
});
