<?php

require __DIR__ . '/auth.php';

// your routes goes here
$router->get('', 'WelcomeController@home');
$router->get('home', 'WelcomeController@home');

$router->get('project', 'ProjectController@index');
$router->get('project/detail/{id}', 'ProjectController@detail');
$router->get('project/add', 'ProjectController@add');
