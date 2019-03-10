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

Route::group(['middleware' => 'web'], function ()
{
    Route::match(['get', 'post'], '/', 'IndexController@execute')->name('home');
    Route::get('/pages/{alias}', 'PageController@execute')->name('page');

    Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
    Route::view('/', '')->name('admin');

    Route::group(['prefix' => 'pages'], function ()
    {
        Route::get('/', 'PagesController@execute')->name('pages');
        Route::match(['get', 'post'], '/add', 'PagesAddController@execute')->name('pages-add');
        Route::match(['get', 'post', 'delete'], '/edit/{page}', 'PagesEditController@execute')->name('pages-edit');
    });

    Route::group(['prefix' => 'portfolios'], function ()
    {
        Route::get('/', 'PortfolioController@execute')->name('portfolios');
        Route::match(['get', 'post'], '/add', 'PortfolioAddController@execute')->name('portfolios-add');
        Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', 'PortfolioEditController@execute')->name('portfolios-edit');
    });

    Route::group(['prefix' => 'services'], function ()
    {
        Route::get('/', 'ServiceController@execute')->name('services');
        Route::match(['get', 'post'], '/add', 'ServiceAddController@execute')->name('services-add');
        Route::match(['get', 'post', 'delete'], '/edit/{service}', 'ServiceEditController@execute')->name('services-edit');
    });

    Route::group(['prefix' => 'services'], function ()
    {
        Route::get('/', 'ServiceController@execute')->name('services');
        Route::match(['get', 'post'], '/add', 'ServiceAddController@execute')->name('services-add');
        Route::match(['get', 'post', 'delete'], '/edit/{service}', 'ServiceEditController@execute')->name('services-edit');
    });

});