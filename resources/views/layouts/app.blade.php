<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
</head>

<body>
	<div id="wrapper">

		@include('inc.nav')
		<div class="container">
			<div class="row">
			@include('inc.messages') @yield('content')
			</div>
			
		</div>
		



	</div>
	{{--  <footer class="footer">
		<div class="container">
        <a href="#" style="color:white;"> In association with </a>
		</div>
	</footer>  --}}

	<!-- Scripts -->

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>

</html>