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

$app->get('/blog/{api?}', ['as' => 'accueil', 'ArticleController@index']);

$app->get('/blog/{id}/{api?}', ['as'=> 'display', 'ArticleController@getArticle']);

$app->post('/admin/create/{api?}', ['as'=> 'create', 'AdminController@createArticle']);

$app->post('/admin/update/{id}/{api?}', ['as'=> 'update', 'AdminController@updateArticle']);

$app->get('/admin/delete/{id}/{api?}', ['as'=> 'delete', 'AdminController@deleteArticle']);


