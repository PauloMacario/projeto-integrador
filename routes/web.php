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
    return view('index');
}); 

Route::get('ongs', 'OngController@index');

Route::get('eventos', function(){
    return view('eventos');
});

Route::get('/galeria', function(){
    return view('galeria');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/autenticacao', function () {
    return view('autenticacao');
});

Route::get('/cadastro', function () {
    return view('cadastro');
}); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
