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


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('players',  ['uses' => 'PlayerController@showAllPlayers']);

    $router->get('players/position/{position}', ['uses' => 'PlayerController@showPlayersConsideringPosition']);

    $router->get('players/{id}', ['uses' => 'PlayerController@showPlayerConsideringId']);

    //showPlayersConsideringCountry
    $router->get('players/country/{country}', ['uses' => 'PlayerController@showPlayersConsideringCountry']);

});