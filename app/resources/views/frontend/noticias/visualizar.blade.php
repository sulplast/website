<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Notícias | {{ config('sulplast.meta-title') }}</title>

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
		@include('frontend.layouts.components.sp-header', ['title' => 'Notícias'])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('noticia', $noticia) !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>{{ $noticia->titulo }}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						{!! str_replace('[urlTag]', url('images/noticias'), $noticia->corpo) !!}
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
