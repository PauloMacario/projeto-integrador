<?php

/*  ########################  PERFIL USER  ########################## */

// ######################### INICIO  Rotas Autenticadas   #################################

Route::middleware(['auth'])->group(function (){
    
    // Lista home PERFIL USER
    Route::get('/home', 'HomeController@index')->name('home');
    
    // Editando PERFIL USER
    Route::get('home/perfil-editar', 'UserController@editarUser');
    Route::put('home/perfil-atualizar/{id}', 'UserController@atualizarUser');
    
    // Deltar usuario e seus relacionamentos
    Route::delete('/delete/{id}', 'UserController@delete');

    // Lista ongs do usuario via AJAX na home do perfil

    Route::get('home/minhas-ongs/admin' , function (){ return view('homeOng'); });

    /*  #######################  PERFIL ONG  ########################### */

     // Listar uma ONG
    Route::get('homeOng/{idOng}', 'OngController@listarOng');

    // Criando uma nova ONG

    Route::get('home/ong-criar', 'OngController@adicionarOng');
    Route::post('home/ong-salvar/{id}', 'OngController@salvarOng');

    // Editando PERFIL ONG
    Route::get('homeOng/perfil-ong-editar/{id}', 'OngController@editarOng');
    Route::put('homeOng/perfil-ong-atualizar/{id}', 'OngController@atualizarOng');

    Route::get('homeOng/galeria/postar/{id}', 'GalleryController@adicionarFoto');
    Route::post('homeOng/galeria/salvar/', 'GalleryController@postarFoto');
   

    /*  ######################  Rotas EVENTOS   ############################# */
    Route::get('eventos/{id}', 'ActionEventController@listaEvento');
    Route::get('homeOng/evento/criar/{id2}', 'ActionEventController@adicionarEvento');
    Route::put('homeOng/evento/salvar', 'ActionEventController@salvarEvento');


    /*  ######################  Rotas BUSCAS    ########################### */


});
// ######################### FINAL Rotas Autenticadas   #################################





// ######################### Rotas de BUSCAS   #################################
Route::get('busca/{busca}', 'OngController@buscarOng');

Route::get('home/listar-ongs/{id}', 'UserController@allOngs');

Route::get('homeOng/listar-eventos/{id}', 'ActionEvent@allEvents');

Route::get('homeOng/listar-fotos/{id}', 'GalleryController@allFotos'); 


// ####################### Rotas para acesso site NÃO LOGADO   ################################

Route::get('/', function () { return view('index'); });

Route::get('/galeria', 'GalleryController@index');

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




