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

// Web
Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'about-us', 'as' => 'about-us.'], function () {
    Route::get('company-profile', 'AboutusController@getCompanyProfile');
});

// AUTH
Route::group(['as' => 'auth.'], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@logout']);

    Route::get('password/email', ['as' => 'password.forgot', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.send', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@reset']);
});

// CMS Admin
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard
    Route::get('/', ['as' => 'index', 'uses' => 'Admin\DashboardController@index']);

    // PRODUCTS
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {

        // Categorys
        Route::resource('categorys', 'Admin\Products\CategorysController');
        Route::post('categorys/update/{id}', 'Admin\Products\CategorysController@update')->name('categorys.update');
        Route::post('categorys/destroy', 'Admin\Products\CategorysController@destroy')->name('categorys.destroy');

        // Contents
        Route::resource('contents', 'Admin\Products\ContentsController');
        Route::post('contents/update/{id}', 'Admin\Products\ContentsController@update')->name('contents.update');
        Route::post('contents/destroy', 'Admin\Products\ContentsController@destroy')->name('contents.destroy');
        Route::any('contents/upload/{id?}', 'Admin\Products\ContentsController@upload')->name('contents.upload');
    });

    // PROFILE
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('', ['as' => 'profile', 'uses' => 'Admin\Profile\ProfileController@index']);
        Route::post('update', ['as' => 'update', 'uses' => 'Admin\Profile\ProfileController@password']);
    });

    // USERS
    Route::resource('users', 'Admin\Users\UsersController');
    Route::post('users/update/{id}', 'Admin\Users\UsersController@update')->name('users.update');
    Route::post('users/destroy', 'Admin\Users\UsersController@destroy')->name('users.destroy');

});

