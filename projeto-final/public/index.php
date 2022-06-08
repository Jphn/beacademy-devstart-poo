<?php

use App\Controller\ErrorController;
use App\Controller\IndexController;

include __DIR__ . '/../vendor/autoload.php';

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName): array
{
	return [
		'controller' => $controllerName,
		'method' => $methodName
	];
}

$routes = [
	'/' => createRoute(IndexController::class, 'indexAction'),
	'/login' => createRoute(IndexController::class, 'loginAction')
];

if (!isset($routes[$uri])) {
	(new ErrorController())->notFound();
	exit;
}

$controllerName = $routes[$uri]['controller'];
$methodName = $routes[$uri]['method'];

(new $controllerName())->$methodName();

// echo "Hello World!";