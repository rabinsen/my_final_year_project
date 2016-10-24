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
Route::get('/test', function () {
    return view('test');
});

Route::get('/', 'PropertyController@showLatest');
Route::get('about', 'PostController@show');


Route::resource('articles', 'ArticlesController');

Route::get('profile', 'UserController@profile');

Route::get('/userDashboard', [
    'uses' => 'PropertyController@dashboard',
    'as' => 'userDashboard',
     //'middleware' => 'auth'
]);

Route::post('profile', 'UserController@update_avatar');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('user/activation/{token}', 'Auth\AuthController@userActivation');
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

//Route::get('/propertyList', [
//    'uses' => 'PropertyController@show',
//    'as' => 'showProperties',
//    // 'middleware' => 'auth'
//]);

Route::get('/create', 'PropertyController@upload');
Route::post('store', 'PropertyController@store');
//Route::get('showProperties', 'PropertyController@show');
Route::get('/propertyList', [
    'uses' => 'PropertyController@show',
    'as' => 'showProperties',
    // 'middleware' => 'auth'
]);

Route::get('/details/{id}', [
    'uses' => 'PropertyController@detail',
    'as' => 'details',
    // 'middleware' => 'auth'
]);

Route::post('/review', [
    'uses' => 'PropertyController@review',
    'as' => 'review',
    // 'middleware' => 'auth'
]);
