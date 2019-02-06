@extends('Painel.templates.template')


@section('content')


  <h3 class="title-pg"> LISTAGEM DE PRODUTOS </h3>
  
  <!-- <a a href="{{url('/painel/produtos/create')}}" class="btn btn-primary"><span class=" glyphicon glyphicon-add"></span>Cadastrar </a> -->

  <a a href="{{route('produtos.create')}}" class="btn btn-primary"><span class=" glyphicon glyphicon-add"></span>Cadastrar </a>

  <br>
 <table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th width="100px">Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{$product->name}}</td>
				<td>{{$product->description}}</td>
				<td>
					<a href="" class="edit actions">
                        <span class="glyphicon glyphicon-pencil">Edi</span>
				    </a>
					<a href="" class="delete actions">
						<span class="glyphicon glyphicon-trash">Exc</span>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


@endsection