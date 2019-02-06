<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Models\Painel\Product;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $title= "listagem de Produtos";
        $products= $product->all();
        return view('Painel.products.index',compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="cadastro de produto";
        $category=['eletronico','moveis','limpesa','banho'];


        return view('Painel.products.create',compact('title','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        //
        //$request->all();  //pega todos os dados do formulario
        // dd($request->only(['name','number'])); alguns campos
        // dd($request->except(['_token'])); exeto o token
        // dd($request->input('name'); um campo especifico

        $dataForm= $request->except('_token');

        // if($dadtaForm['active']== ''); //caso esteja vazio o campo
        //    $dadtaForm['active']=0;

            $dataForm['active']=(!isset($dataForm['active'])) ? 0:1;

          //insert ou create
         //create e necessario o filable na model masi seguro

        //validando dados do form na model
        $this->validate($request, $product->rules,$product->mensagens);

        $insert=$product->insert($dataForm);


        if($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function teste(Product $product)
    {
        // $prod= $product;
        // $prod->name='nome produto';
        // $prod->number=123;
        // $prod->active=true;
        // $prod->category="moveis";
        // $prod->description="minha descrição";

        // $insert =$prod->save();

        // if ($insert)
        //     return "inserido";
        // else
        //     return"falhou";




        // $prod= $product->insert([
        //     'name'=>'meu produto',
        //     'number'=>'321',
        //     'active'=>false,
        //     'category'=>'moveis',
        //     'description'=>'meu produto2'
        // ]);



        //mais segura pois e necessario especificar na model quais caḿpos serão preenchidos
        //  $insert =$prod= $product->create([
        //     'name'=>'meu produto 4',
        //     'number'=>'321',
        //     'active'=>false,
        //     'category'=>'moveis',
        //     'description'=>'meu produto4'
        // ]);

        //   return "$insert->id";

/////////////////////////////////////////////////////////////
        //update
        // $prod= $product->find(5);
        // //// $update =$prod->save();

        // $prod->update([
        // 'name'=>'update',
        // 'number'=>'11',
        // 'active'=>true,
        // 'category'=>'moveis',
        // 'description'=>'product'
        // ]);

      //update por qualquer outro campo do banco de dados
      //   $prod= $product->where('number','=',111);

//////////////////////////////////////////////////////
   //delete
        // $prod= $product->find(3);
        // $delete= $prod->delete();


       // $product->destroy(2); | $product->destroy([2,3,4]);

    }

}
