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


// 公開用

// トップ
Route::get('/', 'WelcomeController@index');

// 募集要項
Route::resource('public_recruits', 'PubrecruitsController');

// ログイン認証
Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

// 管理者用
Route::get('admin', 'AdminController@index')->name('admin.get');

//ログイン済み
Route::group(['middleware' => 'auth'], function () {
    // 管理者登録
    Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
    Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

    // 管理者管理
    Route::resource('users', 'UsersController');

    // 募集要項
    Route::resource('admin_recruits', 'RecruitsController');
});