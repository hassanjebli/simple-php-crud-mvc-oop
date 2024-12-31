<?php
use App\Router;
use App\Controllers\UserController;


$router = new Router();


$router->addRoute('GET', 'index', UserController::class, 'index');
$router->addRoute('GET', 'create', UserController::class, 'create');
$router->addRoute('POST', 'store', UserController::class, 'store');
$router->addRoute('GET', 'edit', UserController::class, 'edit');
$router->addRoute('POST', 'update', UserController::class, 'update');
$router->addRoute('GET', 'delete', UserController::class, 'delete');
$router->addRoute('GET', 'show', UserController::class, 'show');


$router->dispatch();