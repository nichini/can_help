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

Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'HelpController@index');
Route::post('/helps', 'HelpController@store');
Route::get('/helps/create', 'HelpController@create');
Route::get('/helps/{help}', 'HelpController@show');
Route::put('/helps/{help}', 'HelpController@update');
Route::get('/helps/{help}/show_add', 'HelpController@show_add');
Route::get('/helps/{help}/show_last', 'HelpController@show_last');
Route::get('/helps/{help}/edit', 'HelpController@edit');
Route::get('/prefecture/{prefecture}', 'PrefectureController@index');
Route::get('/mypage', 'UserController@my');
Route::get('/mypage/{user}', 'PrefecturerController@myshow');
Route::get('/mypage/{user}', 'UserController@myshow');
//Route::get('/mypage/{user}', 'UserController@update');
Route::put('/mypage/{user}', 'UserController@update');
Route::get('/mypage/{user}/edit', 'UserController@edit');
Route::post('/helps/{help}/apply', 'HelpController@show_apply');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
