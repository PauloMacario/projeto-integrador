<?php
use App\User;
use App\Ong;
use App\OngHasUser;

/*  ############  Rotas da Index   (INICIO) ############ */

// Lista todas Ongs cadastradas
Route::get('ongs/', 'OngController@index');

// Lista todos Eventos cadastrados
Route::get('eventos','ActionEventController@index');






/*  ############  Rotas de Ongs   (INICIO) ############ */



/*  ############  Rotas Eventos   (INICIO) ############ */



/*  ############  Rotas do Perfil auth User   (INICIO) ############ */


Route::get('home/perfil-editar', 'UserController@editarUser');

Route::put('home/perfil-atualizar/{id}', 'UserController@atualizarUser');

Route::get('home/{id}/nova-ong', 'OngController@adicionarOng');

// Realiza o cadastro da ong ------ Falta menssagens de error
Route::post('home/nova-ong/salvar', 'OngController@salvarOng');

// Lista ongs do usuario via AJAX na home do perfil
Route::get('home/listar-ongs/{id}', 'UserController@allOngs'); 




/*  ############  Rotas do Perfil auth Ong   (INICIO) ############ */


/*  ############  Rotas Minhas ongs admin  (INICIO) ############ */


Route::get('home/minhas-ongs/admin' , function () {
    return view('minhasOngs');
}); 

Route::get('home/minhas-ongs/admin/{id}', 'UserController@allOngsAdmin'); 





Route::get('/', function () {
    return view('index');
}); 







Route::get('busca/{busca}', 'OngController@buscarOng');





/* Route::get('home/listarOngs/{id}', "UserController@listarOngs"); */
























Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('teste', function(){
    
    
    
});
        







Route::get('/galeria', function(){
            return view('galeria');          // CRIAR METODO DE BUSCA DE FOTOS ALEATORIAS COM PAGINAÇÃO
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