@php
	$pagina = App\Pagina::returnPage('mapa-de-localizacao');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ $pagina->meta_description }}">
	<meta name="keywords" content="{{ $pagina->meta_keywords }}">
	<meta name="author" content="Pedro Roccon">
	<title>{{ $pagina->meta_title }}</title>
	{!! $pagina->meta_misc !!}
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

	<!-- Loading the Favicon and App icons -->
	<link rel="icon" type="image/png" href="{{ asset_locale('/images/favicon.png') }}" />
	<link rel="apple-touch-icon" href="{{ asset_locale('/images/mobile-icon.png') }}">

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/parallax.min.js') }}"></script>
</head>
<body>
	<div class="main">

		<!-- Header -->
		@include('frontend.layouts.header')
		
		<!-- Subpage header -->
		@include('frontend.layouts.components.sp-header', ['title' => $pagina->titulo])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('fale-conosco-localizacao') !!}

		<div id="google-maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3689.8183699628585!2d-47.55799896958924!3d-22.360485987620415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7dc77444d2e97%3A0xedfe0da2a062a9e4!2sSulplast+Fibra+Vidro+Temoplastico+Ltda.!5e0!3m2!1spt-BR!2sus!4v1564751555020!5m2!1spt-BR!2sus" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
