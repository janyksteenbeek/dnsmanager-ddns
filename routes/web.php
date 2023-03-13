<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () {
    return redirect(env('HOME_URL', 'https://github.com/janyksteenbeek/dnsmanager-ddns'));
});

// Dyn
$router->get('/nic/update', ['as' => 'dyn.nicupdate', 'uses' => 'DynController@nicUpdate']);
