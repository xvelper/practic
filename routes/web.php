<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('movie/showAll', 'MovieController@showAll');

$router->post('movie/add', 'MovieController@add');

$router->get('movie/{id}', 'MovieController@showId');

$router->get('movie/delete/{id}', 'MovieController@delete');

$router->post('movie/edit/{id}', 'MovieController@edit');


