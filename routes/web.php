<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () { // / - home page
//     return view('welcome'); // 'welcome' - ссылка на ресурс
// });

Route::get('/', 'BaseController@getIndex');
Route::get('post','BaseController@getPost');
Route::get('recipe','BaseController@getRecipePost');
Route::get('about', 'BaseController@getAbout'); // - переходим в PagesController в часть getAbout (имяКонтроллера@имяМетодаКонтроллера)

Route::resource('posts','PostController');