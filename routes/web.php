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

Route::get('/', 'HomeController@index');
Route::get('/floorplans', function () {
    return view('/pages.floorplans');
});
Route::get('/photos', function () {
    return view('/pages.photos');
});
Route::get('/permits', function () {
    return view('/pages.permits');
});
Route::get('/financing', function () {
    return view('/pages.financing');
});
Route::get('/3D', function () {
    return view('/pages.3d');
});
Route::get('/about', function () {
    return view('/pages.aboutUs');
});

Route::get('/cms', 'CmsController@index')->middleware('auth');
Route::get('/cms/create', 'CmsController@create');
Route::post('/cms/create', 'CmsController@store');
Auth::routes();
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@mailtoAdmin');
Route::get('/edit/{id}', 'CmsController@edit');
Route::post('/edit/{id}', 'CmsController@update');
Route::get('/delete/{id}', 'CmsController@delete');
Route::post('/delete/{id}', 'CmsController@destroy');



