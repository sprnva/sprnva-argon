<?php

// authentication
$router->get('login', 'AuthController@index');
$router->post('login', 'AuthController@authenticate');
$router->get('logout', 'AuthController@logout');

$router->get("register", 'RegisterController@index');
$router->post("register", 'RegisterController@store');

$router->get("profile", 'ProfileController@index');
$router->post('profile', 'ProfileController@update');
$router->post('profile/changepass', 'ProfileController@changePass');
$router->post('profile/delete', 'ProfileController@delete');
