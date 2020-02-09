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

Route::get('/', function () {
    $packagist = new \Spatie\Packagist\Packagist(new \GuzzleHttp\Client());
    return view('welcome', compact('packagist'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('api/packages/get', 'PackagesController@get')->name('get_packages');
Route::get('api/packages', 'PackagesController@index');

