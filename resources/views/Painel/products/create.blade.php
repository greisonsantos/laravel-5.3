@extends('Painel.templates.template')

@section('content')

<h1> Gestão de Produtos </h1>

 @if(isset($errors) && count($errors)>0)

   <div class="alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}} </p>
        @endforeach
   </div>
 @endif





<form class="form" action="{{route('produtos.store')}}" method="post" accept-charset="utf-8">

	<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
	{!! csrf_field()!!}
	<div class="form-group">
		<input type="text" name="name" placeholder="nome" class="form-control" value="{{$product->name or old('name')}}">
	</div>
	<div class="form-group">
		<label>
			<input type="checkbox" name="active" value="1" @if (isset ($product) && $product->active=='1') checked @endif> Ativo?
		</label>
	</div>
	<div class="form-group">
		<input type="number" name="number" placeholder="numero" class="form-control" value="{{$product->number or old('number')}}">
	</div>

	<div class="form-group">
		<select name="category">
			<option > Escolha a categoria</option>
			@foreach($category as $category)

			<option value="{{$category}}">{{$category}}</option>

			@endforeach
		</select>
	</div>
	<div class="form-group">
		<input type="text" name="description" placeholder="descrição" class="form-control" value="{{$product->description or old('description')}}">
	</div>

	<button  class="btn btn-primary" >Enviar</button>
</form>

@endsection