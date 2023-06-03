@php
	$pagina = App\Pagina::returnPage('noticias');
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
		{!! Breadcrumbs::render('noticias') !!}

		<div class="sp-content">
			@if (Auth::check())
				<div class="container">
					<a href="#" class="btn btn-xs tiny-cms-apply" data-toggle="modal" data-target="#m-crud">Adicionar notícia</a>
				</div>
				<hr>
			@endif
			
			<div class="container">
				@if ( ! Auth::check())
					@foreach($noticias as $noticia)
						<div class="row">
							<div class="col-md-12">
								<div class="titulo">
									<h3 class="h3">{{ $noticia->titulo }}</h2>
								</div>

								<p class="noticias-data text-muted"><i>{!! empty($noticia->publicada_em) ? '<span class="label label-danger">Não publicada</span> &ensp; ' : 'publicado em ' . $noticia->created_at->format('d/m/Y à\s H:i:s') !!}</i></p>
								<div class="noticia-container tiny-cms">
									{!! str_replace('[urlTag]', url('images/noticias'), $noticia->corpo) !!}
								</div>
							</div>
						</div>
						<br><br>
						<hr>
						<br>
					@endforeach
				@else
					@foreach($noticias as $noticia)
						<form action="{{ url(app()->getLocale() . '/noticias-atualizar/' . $noticia->id) }}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="col-md-12">
									<div class="titulo">
										<h3 class="h3">{{ $noticia->titulo }}</h2>
									</div>

									<p class="noticias-data text-muted"><i>{!! empty($noticia->publicada_em) ? '<span class="label label-danger">Não publicada</span> &ensp; ' : 'publicado em ' . $noticia->created_at->format('d/m/Y à\s H:i:s') !!}</i></p>
									<div class="noticia-container tiny-cms">
										{!! str_replace('[urlTag]', url('images/noticias'), $noticia->corpo) !!}
									</div>
									<button type="submit" class="btn btn-primary">Salvar</button>
								</div>
							</div>
							<br><br>
							<hr>
							<br>
							</form>
					@endforeach
				@endif
			</div>
			
			<!-- Paginação -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						{!! $noticias->render() !!}
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		@include('frontend.layouts.footer')

		@if (Auth::check())
			@include('frontend.noticias.partials.crud')
		@endif

	</div>
</body>
</html>
