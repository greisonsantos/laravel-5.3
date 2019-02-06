@extends('Site.Template.template1')

@section('content')

<h1> home page do site</h1>
  <!-- {{$teste1}} -->
  <!-- valor default para varialvel caso não seja passado -->
  {{$var1 or ''}}   <!-- tag de impressão segura-->
  {{!!$var1 or ''!!}}   <!-- tag de impressão insegura-->

  @if($var1=='123')
  <p> e igual</p>
  @else
  <p> E diferente</p>
  @endif

   @for($i =0; $i<10; $i++)

   <p> ola  mundo</p>

   @endfor

{{--forelse 
	@empty
	   <p>mensagem </p>   
	@endforelse--}}



@include('Site.Include.SideBar',compact('var1'))

@endsection
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


@push('scripts')

@endpush