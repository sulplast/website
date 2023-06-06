<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Pedro Roccon">
	<title>Vagas | Sulplast - Fibra de vidro e Termoplástico</title>

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
		@include('frontend.layouts.components.sp-header', ['title' => 'Vagas'])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('vagas') !!}

        <!-- Vagas disponíveis -->
        @php

            /** 
            $vagas = [
                [
                    'titulo' => 'Assistente fiscal/Controlador de estoque', 
                    'descricao' => 'Responsável pelo controle de estoque, registro de notas fiscais de recebimentos e outras atividades pertinentes à função', 
                    'requisitos' => 'Experiência de 01 ano na função;Operação de empilhadeira;Pacote Office', 
                    'desejavel' => 'Sistemas ERP'
                ], 
                [
                    'titulo' => 'Estagiário de engenharia', 
                    'descricao' => 'Apoio as atividades de APQP, ao controle de moldes e gabaritos, bem como outras tarefas do setor', 
                    'requisitos' => 'Cursando Engenharia de Produção/Mecânica;Pacote Office', 
                    'desejavel' => 'Desejável leitura e interpretação de desenhos técnicos'
                ], 
            ];
            */

            $vagas = [];

        @endphp

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        @if (count($vagas))
                            @foreach($vagas as $vaga)
                                <div style="margin-bottom: 30px; padding: 40px; box-sizing: border-box; background: #eee;">
                                    <h3 class="h3 text-primary">{!! $vaga['titulo'] !!}</h3>
                                    <p>{!! $vaga['descricao'] !!}</p>

                                    @if (isset($vaga['requisitos']))
                                        <p><strong>Requisitos</strong></p>
                                        <p>
                                        @foreach(explode(';', $vaga['requisitos']) as $requisito)
                                            - {!! $requisito !!}<br>
                                        @endforeach
                                        </p>
                                    @endif

                                    @if (isset($vaga['desejavel']))
                                        <p><strong>Requisitos</strong></p>
                                        <p>
                                        @foreach(explode(';', $vaga['desejavel']) as $desejavel)
                                            - {!! $desejavel !!}<br>
                                        @endforeach
                                        </p>
                                    @endif
                                </div>
                            @endforeach

                            <hr>

                            <h2 class="h2">Candidate-se a uma vaga</h2>
                            <p class="lead">Preencha o formulário abaixo para candidatar-se a uma das nossas vagas disponíveis</p>
                            @include('frontend.fale-conosco.partials.trabalhe-conosco', ['vagas' => $vagas])

                        @else
                            <div class="alert alert-info">
                                <strong>No momento não estamos com processos seletivos abertos. Mas fique atento ao nosso site e mídias sociais, para saber quando aparecer uma nova vaga no time <strong>Sulplast</strong>
                            </div>
                        @endif
					</div>
                    <div class="col-md-offset-1 col-md-3">
                        <h4 class="h4">Não encontrou uma vaga para você?</h4>
                        <p>Utilize o nosso formulário "Trabalhe conosco" e deixe seu currículo cadastrado em nosso banco de talentos. Nós iremos te avisar caso uma vaga esteja disponível e você seja selecionado</p>
                        <br>
                        <a href="{{ url_locale('trabalhe-conosco') }}" class="btn btn-primary">Envie seu currículo</a>
                    </div>
				</div>
			</div>
		</div>

	
		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
