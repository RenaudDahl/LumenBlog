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

$app->get('/blog', 'ArticleController@index');

$app->get('/blog/{id}', 'ArticleController@getArticle');

$app->post('/admin/create', 'AdminController@createArticle');

$app->post('/admin/update/{id}', 'AdminController@updateArticle');

$app->get('/admin/delete/{id}', 'AdminController@deleteArticle');
