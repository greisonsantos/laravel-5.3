<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class SiteController extends Controller
{
    //midleware dentro do controle assim todos os metodos
    //dentro da classe passaram pela classe

    // =>todos os metodos
    // public function __construct(){
    //     $this->middleware('auth');


     //  => alguns metodos
     // especifica quais metodos passaram pelo middleware
     //        $this->midleware('auth')->only([
     //         'contato',
     //         'categoria'
     //     ]);

     // =>exeto
     //       $this->midleware('auth')->exept([]);
     // // }


    public function index(){
      
      $teste1=123456;
      $teste2=1234561;
      $teste3=1234562;
      $title ='LARAVEL';
      $var1=1232;

        // return view('index',['teste'=>$teste]);
    	return view('index',compact('teste1','title','var1'));
    }

    public function contato(){

    	return view('Site.Contato.Contato');
    }

     public function categoria($id){

    	return "categoria de id {$id}";
    }

     public function categoria2($id=''){

    	return "categoria2 de id {$id}";
    }
}

