<?php

/*  ########################  PERFIL USER  ########################## */

// ######################### INICIO  Rotas Autenticadas   #################################

Route::middleware(['auth'])->group(function (){

    // Lista home PERFIL USER
    Route::get('/home', 'HomeController@index')->name('home');

    // Editando PERFIL USER
    Route::get('home/perfil-editar', 'UserController@editarUser');
    Route::put('home/perfil-atualizar/{id}', 'UserController@atualizarUser');

    // Lista ongs do usuario via AJAX na home do perfil
    
    Route::get('home/minhas-ongs/admin' , function (){ return view('homeOng'); });

    /*  #######################  PERFIL ONG  ########################### */
    
    // Criando uma nova ONG
    Route::get('home/ong-criar', 'OngController@adicionarOng');
    Route::post('home/ong-salvar/{id}', 'OngController@salvarOng');
    
    // Editando PERFIL ONG
    Route::get('home/perfil-ong-editar/{id}', 'OngController@editarOng');
    Route::put('home/perfil-ong-atualizar/{id}', 'OngController@atualizarOng');
    
    // Lista perfil da ONG com a permissão do USER
    Route::get('home/ong/{id}/user/{user?}', 'OngController@listarOng');
    
    Route::get('busca/{id}', 'OngController@buscarOng');
    
    // Deltar usuario e seus relacionamentos
    Route::delete('/delete/{id}', 'UserController@delete');
    
    
    
    /*  ######################  Rotas EVENTOS   ############################# */
    Route::get('eventos/{id}', 'ActionEventController@listaEvento');
    Route::get('home/evento-criar', 'ActionEventController@adicionarEvento');
    Route::put('home/evento-salvar/{id}', 'ActionEventController@salvarEvento');
    
    
    /*  ######################  Rotas BUSCAS    ########################### */
    
    
});
// ######################### FINAL Rotas Autenticadas   #################################




// ######################### Rotas de BUSCAS   #################################
Route::get('busca/{busca}', 'OngController@buscarOng');

Route::get('home/listar-ongs/{id}', 'UserController@allOngs');


// ####################### Rotas para acesso site NÃO LOGADO   ################################

Route::get('/', function () { return view('index'); });

Route::get('/galeria', function(){ return view('galeria'); });

Route::get('/faq', function(){ return view('faq'); });

Route::get('/contato', function(){ return view('contato'); });

Route::get('ongs/', 'OngController@index');

Route::get('eventos','ActionEventController@index');



Auth::routes();
/* Route::get('/home', 'HomeController@index');
Route::get('/auth/logout', 'Auth\AuthController@logout');
*/










/*   Route::get('/teste', function () {
    return view('novoEvento');
});  */




