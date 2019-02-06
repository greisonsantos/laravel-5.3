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


//cotroller resource




//rotas enviando para controllers

Route::get('/','site\SiteController@index');
Route::get('/contato','site\SiteController@contato');
Route::get('/categoria/{id}','site\SiteController@categoria');
Route::get('/categoria2/{id?}','site\SiteController@categoria2');


// Route::resource('/painel/produtos','painel\ProdutosController');

Route::resource('/painel/produtos','painel\ProdutosController');




//middleware para pessoas autenticadas
// Route::get('/categoria2/{id?}','site\SiteController@categoria2')->middleware('auth');



// Route::get('/empresa', function(){
//      return view('empresa');
// });

// Route::get('/contato', function(){
//      return view('contato');
// });





// // rota que aceita vetor de tipos de requisição
// Route::match(['get','post'],'/math', function(){
// 	 return 'route match';
// });


// // aceita todos os tipos de rotas
// Route::any('/any', function(){
//  return 'rota any';

// });

// //renomear rota
// Route::get ('/nome/nome/nome', function(){
// 	return 'rotra grande';
// })->name('rota-nomeada');




// //rotas com parametros

// Route::get('/categoria/{id_categoria}', function($id_categoria){
//     return "posts da categtoria {$id_categoria}";
// });

// //parametro opcional
// Route::get('/categoria2/{id_categoria?}', function($id_categoria=''){
//     return "posts da categtoria {$id_categoria}";
// });


// //grupo de rotas
// Route::group(['prefix'=>'painel', 'middleware'=>'auth'], function(){
// 	Route::get('/grupo1', function(){
//        return 'grupo 1';
// 	});

// 	Route::get('/grupo2', function(){
//        return 'grupo 2';
// 	});
// });


Route::get('/login', function(){
  return 'rota de login';
});



