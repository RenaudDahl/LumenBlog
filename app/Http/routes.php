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

$app->get('/blog', 'App\Http\Controllers\ArticleController@index');

$app->get('/blog/{id}', 'App\Http\Controllers\ArticleController@getArticle');

$app->get('/admin/create', 'App\Http\Controllers\ArticleController@createArticle');

$app->get('/admin/update/{id}', 'App\Http\Controllers\ArticleController@updateArticle');

$app->get('/admin/delete/{id}', 'App\Http\Controllers\ArticleController@deleteArticle');
