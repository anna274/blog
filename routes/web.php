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

// имяКонтроллера@имяМетодаКонтроллера
Route::get('/', 'PostController@index');
Route::get('post','BaseController@getPost'); 
Route::get('recipe','BaseController@getRecipePost');
Route::get('about', 'BaseController@getAbout'); 
Route::get('send', 'mailController@send');
Route::resource('posts','PostController');
Route::get('category/{id}', 'CategoryController@getCategory');
<<<<<<< HEAD
Route::get('/search', 'SearchController@getIndex');

// Я тут чета колдую

Route::get('setlocale/{lang}', function ($lang) {
    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {
        set($segments[1]); //удаляем метку
    } 
    
    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){ 
        array_splice($segments, 1, 0, $lang); 
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);
    
    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){    
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу                            

})->name('setlocale');
=======
Route::get('/search', 'SearchController@getIndex'); // зачем?
>>>>>>> 5badaaf9e07fc1f55c6b11897cc3276db3ab9bde
