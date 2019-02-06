<!DOCTYPE html>
<html>
<head>
	<title>{{$title or 'curso de laravel'}}</title>

</head>
<body>


   @yield('content')

   @stack('scripts')

</body>
</html>

