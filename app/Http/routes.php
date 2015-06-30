<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/blog', function() use ($app) {
    return ;
});

$app->get('/blog/{article}', function($article) use ($app) {
    return ;
});

$app->get('/admin/create', function() use ($app) {
    return ;
});

$app->get('/admin/update/{article}', function($article) use ($app) {
    return ;
});

$app->get('/admin/delete/{article}', function($article) use ($app) {
    return ;
});
