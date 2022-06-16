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

Route::group(['prefix' => 'myadmin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@index');
Route::group(['prefix' => 'en', 'middleware' => 'setLocale'], function () {
    Route::get('/', 'PageController@index');
    Route::get('/d/{slug}', 'PageController@dynamicPage');
    Route::get('/s/{slug}', 'PageController@staticPage');
});
Route::group(['prefix' => 'es', 'middleware' => 'setLocale'], function () {
    Route::get('/', 'PageController@index');
    Route::get('/d/{slug}', 'PageController@dynamicPage');
    Route::get('/s/{slug}', 'PageController@staticPage');
});
// Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
//     Route::get('/', 'PageController@index');
//     Route::get('/d/{slug}', 'PageController@dynamicPage');
//     Route::get('/s/{slug}', 'PageController@staticPage');
//     // Route::get('/{slug}', 'PageController@staticPage');
// });
Route::post('/complain', 'EmailController@sendComplain');
Route::post('/contact', 'EmailController@sendContact');
// Route::get('/d/{slug}', 'PageController@dynamicPage');
// Route::get('/s/{slug}', 'PageController@staticPage');





