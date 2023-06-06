@php
	$pagina = App\Pagina::returnPage('trabalhe-conosco');
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
		{!! Breadcrumbs::render('trabalhe-conosco') !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="h2">{{ __('trabalhe_conosco.cadastre_seu_curriculo') }}</h2>
						<div class="quote">
							<p class="lead">{{ __('trabalhe_conosco.cadastre_seu_curriculo_descricao') }}</p>
						</div>
						<p>{{ __('trabalhe_conosco.cadastre_seu_curriculo_obrigatoriedade') }}</p>
						<hr>
						
						<!-- Mensagem de confirmação -->
						@if(Session::has('flash_message'))
							<div class="row">
								<div class="col-md-12">
									<div class="alert alert-success alert-dismissible">
										<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
										<p><strong>{!! Session::get('flash_message') !!}</strong></p>
									</div>
								</div>
							</div>
						@endif
						
						<!-- Erros do validador -->
						

						<!-- Formulário de contato -->
						@include('frontend.fale-conosco.partials.trabalhe-conosco')
						
					</div>
					
					<!-- Sidebar -->
					@include('frontend.fale-conosco.partials.sidebar')

				</div>
			</div>
		</div>

		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
