<?php
use App\User;
use App\Ong;
use App\OngHasUser;
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


Route::get('ongs/', 'OngController@index');

Route::get('home/{id}/novaOng', 'OngController@adicionarOng');

Route::post('home/novaOng/salvar', 'OngController@salvarOng');



Route::get('home/perfilEditar', 'UserController@editarUser');

Route::put('home/perfilAtualizar/{id}', 'UserController@atualizarUser');

/* Route::get('home/listarOngs/{id}', "UserController@listarOngs"); */







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





Route::get('home/ong/{id}', 'UserController@allOngs'); 


Route::get('home/ong/admin{id}', 'UserController@allOngsAdmin'); 




Route::get('minhasOngs' , function () {
    return view('minhasOngs');
}); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('teste', function(){

    
    $user = User::find(1);
    $user->ongs;
    
    return $user->toJson();

});