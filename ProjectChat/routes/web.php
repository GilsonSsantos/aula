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
    return view('welcome');
});

Route::get('/teste', function () {
    return '<html><body>Agenda Web</body></html>';
});

Route::get('/testar', function () {
    return '<html><body>Testando Minha Agenda</body></html>';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('message', 'MessageController');