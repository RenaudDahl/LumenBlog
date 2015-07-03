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

// API Routes

$app->get('/blog/{api?}', 'ArticleController@index');

$app->get('/blog/{id}/{api?}', 'ArticleController@getArticle');

$app->post('/admin/create/{api?}', 'AdminController@createArticle');

$app->post('/admin/update/{id}/{api?}', 'AdminController@updateArticle');

$app->get('/admin/delete/{id}/{api?}', 'AdminController@deleteArticle');


