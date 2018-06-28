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

Route::get('/agenda', function () {
    return '<html><body>AgendaWeb</body></html>';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('message', 'MessageController');
Route::resource('pessoa', 'PessoaController');
Route::resource('telefone', 'TelefoneController');