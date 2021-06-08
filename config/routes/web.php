<?php

use App\Core\App;
use App\Core\Auth;

// your routes goes here
$router->get('/', function () {
    Auth::routeGuardian(['auth']);
    $pageTitle = "Home";
    return view('/home', compact('pageTitle'));
});

$router->get('/home', function () {
    Auth::routeGuardian(['auth']);
    $pageTitle = "Home";
    return view('/home', compact('pageTitle'));
});

// Permissions
$router->get('/permissions', ['PermissionsController@index', 'auth']);

$router->group(['prefix' => 'project', 'middleware' => ['auth']], function ($router) {
    $router->get('/', ['ProjectController@index']);
    $router->get('/detail/{id}', ['ProjectController@detail']);
    $router->post('/detail/{id}', ['ProjectController@updateDetail']);
    $router->get('/add', ['ProjectController@add']);
    $router->post('/add', ['ProjectController@store']);
    $router->post('/delete/{id}', ['ProjectController@delete']);
    $router->get('/view/{id}', ['ProjectController@view']);
});
