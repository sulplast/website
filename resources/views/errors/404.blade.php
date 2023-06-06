<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Pedro Roccon">
	<meta name="robots" content="noindex,nofollow">
	<title>Página não encontrada - Erro 404</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('icons/flaticon.css') }}"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">

	<!-- Loading the Favicon and App icons -->
	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
	<link rel="apple-touch-icon" href="{{ asset('images/mobile-icon.png') }}">

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/parallax.min.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>	
</head>
<body>
	<div class="main">

		<!-- Header -->
		@include('frontend.layouts.header')

		
</body>
</html>
