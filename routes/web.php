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
Route::any('/', 'IndexController@index')->name('index');

Auth::routes();

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Dashboard',
        'middleware' => ['auth'],
    ],
    function () {
        Route::resource('/', 'ObjectsController');
        Route::resource('/work', 'WorkController');
    }
);

Route::group(
    [
        'prefix' => 'user',
        'as' => 'user.',
        'namespace' => 'Dashboard',
        'middleware' => ['auth'],
    ],
    function () {
        Route::resource('/', 'ObjectsController');
        Route::resource('/work', 'WorkController');
    }
);
