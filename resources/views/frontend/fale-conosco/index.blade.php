@php
	$pagina = App\Pagina::returnPage('fale-conosco');
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
		{!! Breadcrumbs::render('fale-conosco') !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="h2">{{ __('fale_conosco.formulario_de_contato') }}</h2>
						<div class="quote">
							<p class="lead">{!! __('fale_conosco.formulario_de_contato_descricao') !!}</p>
						</div>

						<!-- Canais de atendimento -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('comunicacoes-ambientais') }}">
										<span class="card-link-title">Comunicações ambientais</span>
										<span class="card-link-description">Para assuntos relacionados a comunicações ambientes, utilize nosso formulário de contrato</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('canal-de-transparencia') }}">
										<span class="card-link-title">Canal de transparência</span>
										<span class="card-link-description">Entre em contato conosco através do nosso formulário do canal de transparência</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('comercial') }}">
										<span class="card-link-title">Seja um parceiro</span>
										<span class="card-link-description">Se você está interessado em realizar uma parceria com a Sulplast, entre em contato com o nosso comercial</span>
									</a>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('trabalhe-conosco') }}">
										<span class="card-link-title">Trabalhe conosco</span>
										<span class="card-link-description">Se você está interessado em fazer parte da nossa equipe, veja a nossa página de vagas e envie seu currículo.</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('outros-assuntos') }}">
										<span class="card-link-title">Outros assuntos</span>
										<span class="card-link-description">Se nenhum canal de atendimento disponível está relacionado ao assunto que você quer tratar, utilize esta página.</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="{{ url_locale('converse-com-o-dpo') }}">
										<span class="card-link-title">Converse com o DPO</span>
										<span class="card-link-description">Para tratar assuntos relacionados a segurança e proteção de dados, utilize nosso formulário de contato direto com o DPO.</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Sidebar -->
					@include('frontend.fale-conosco.partials.sidebar')

				</div>
			</div>
		</div>

		<!-- Footer -->
		@include('frontend.layouts.footer')

		<!-- Modal de informação -->
		@include('frontend.messages.list')
	</div>
</body>
</html>
