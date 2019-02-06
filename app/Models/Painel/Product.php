<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	  //define quais campos podem ser inseridos no banco de dados
   protected $fillable=['name','number','active','category','description'];

   // protected $guarded=[]

//regras de validação
   public $rules=[
       'name'       =>'required|min:3|max:100',
       'number'     =>'required|numeric',
       'category'   =>'required',
       'description'=>'min:3|max:100'

   ];

   public $mensagens=[
         'name.required'=>'O campo nome e obrigatório',
         'name.min'=>'O campo nome deve ter  mais que três caracteres',
         'name.max'=>'O campo nome não pode conter mais de 100 caracteres'
    ];
}
