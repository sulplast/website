<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Pedro Roccon">
	<title>Comunicações Ambientais | Sulplast - Fibra de vidro e Termoplástico</title>

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
		@include('frontend.layouts.components.sp-header', ['title' => 'Comunicações ambientais'])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('comunicacoes-ambientais') !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

                        <p class="lead">Com práticas, políticas e compromissos alinhados à filosofia ESG, a SULPLAST trabalha diariamente para fomentar os 17 ODS no Brasil e transformar a sustentabilidade em realidade.</p>
                    
                        <p>Neste espaço você pode conversar com a gente sobre os nossos programas ambientais e outros assuntos ligados ao desenvolvimento sustentável. É só preencher e enviar o formulário.</p>

                        <br>

                        @include('frontend.comunicacoes-ambientais.partials.form')
					</div>
                    
                    @include('frontend.comunicacoes-ambientais.partials.sidebar')
				</div>
			</div>
		</div>

	
		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
