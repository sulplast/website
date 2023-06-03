<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Pedro Roccon">
	<title>Canal de transparência | Sulplast - Fibra de vidro e Termoplástico</title>

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
		@include('frontend.layouts.components.sp-header', ['title' => 'Canal de transparência'])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('canal-de-transparencia') !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <p class="lead">Ética, integridade e transparência são valores fundamentais para a <strong>Sulplast</strong>. Por isso, exigimos de todos os colaboradores e parceiros alinhamento total à nossa <a href="{{ url_locale('empresa.politica-de-etica-empresarial-e-sustentabilidade') }}" target="_blank">Política de Ética Empresarial e Sustentabilidade</a>.</p>
                        <p>Caso haja suspeita de conduta inapropriada ou descumprimento das legislações vigentes, aqui nesta página é possível notificar a <strong>Sulplast</strong> sobre a ocorrência. É só preencher e enviar o formulário.</p>
                        <p>A denúncia pode ser anônima, mas caso opte por se identificar, saiba que garantimos a preservação da sua identidade, confidencialidade do caso e proteção contra qualquer tipo de retaliação.</p>
                        <p>Se identificada qualquer irregularidade após análise da denúncia, asseguramos que sanções na esfera administrativa e/ou penal serão aplicadas. Além disso, vamos verificar quais ações podem ser realizadas para evitar reincidência e outros desvios semelhantes.</p>
                        <br>

                        @include('frontend.canal-transparencia.partials.form')
					</div>
				</div>
			</div>
		</div>

	
		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
