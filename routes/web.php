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
/* 
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function(){
    return view('index');
});

Route::get('/acoes', function(){
    return view('acoes');
}); 

Route::get('/instituicoes', function(){
    return view('instituicoes');
}); 

Route::get('/galeria', function(){
    return view('galeria');
}); 

Route::get('/blog', function(){
    return view('blog');
}); 

Route::get('/faq', function(){
    return view('faq');
}); 

Route::get('/contato', function(){
    return view('contato');
}); 

Route::get('/autenticacao', function(){
    return view('autenticacao');
}); 

Route::get('/cadastro', function(){
    return view('cadastro');
}); 



