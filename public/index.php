<?php

use Router\Router;

require(dirname(dirname(__FILE__)) . '/vendor/autoload.php');

//Chemin views
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

//Chemin css/js
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

//Home
$router->get('/', 'App\Controllers\HomeController@index');

//Exercise
$router->get('/exercise/take', 'App\Controllers\exerciseController@take');
$router->get('/exercise/new', 'App\Controllers\exerciseController@index');
$router->post('/exercise/create', 'App\Controllers\exerciseController@create');
$router->get('/exercise/edit', 'App\Controllers\exerciseController@edit');
$router->get('/exercise/fields', 'App\Controllers\exerciseController@fields');
$router->get('/exercise/fulfillments', 'App\Controllers\exerciseController@fulfillments');
$router->get('/exercise/manage', 'App\Controllers\exerciseController@manage');

//Answer

//Etc
try {
    $router->run();
} catch (Exception $e) {
    $router->get('/', 'App\Controllers\HomeController@index');
}
