<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Pedro Roccon">
	<title>Governança e Compliance | Sulplast - Fibra de vidro e Termoplástico</title>

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
		@include('frontend.layouts.components.sp-header', ['title' => 'Governança e Compliance'])

		<!-- Breadcrumbs -->
		{!! Breadcrumbs::render('governanca-e-compliance') !!}

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p class="lead">Sempre com base nos princípios de honestidade, justiça e transparência, a conduta empresarial da <strong>Sulplast</strong> segue as mais eficientes práticas de governança e compliance, com o objetivo de estabelecer uma cultura de gerenciamento de risco capaz de fortalecer a credibilidade de nossas cadeias de abastecimento.</p>

                        <h2 class="h2 my-2">O que é governança?</h2>
                        <p>A governança corporativa é o conjunto de estratégias adotadas pela empresa em busca de preservar e fortalecer seu valor, por meio da sinergia entre os objetivos organizacionais e a promoção do bem-estar coletivo.</p>
                        <p>Baseada em princípios de ética empresarial e alinhada à filosofia ESG, esta sistemática integra os relacionamentos dos sócios, diretores e demais colaboradores da companhia, junto a entidades governamentais, agentes de mercado e sociedade como um todo.</p>
                        <br>

                        <h2 class="h2 my-2">O que é compliance?</h2>
                        <p>No ambiente corporativo o termo “compliance” significa o dever de estar em conformidade e fazer cumprir leis, decretos, regulamentos e normativas internas da empresa. Além disso, contempla também as medidas administrativas definidas para casos de transgressão das regras estabelecidas.</p>
                        <br>

                        <h2 class="h2 my-2">Nossa política</h2>
                        <p>Em busca de garantir a integridade de nossas relações, o cumprimento das legislações vigentes e promover a confiabilidade nas cadeias de abastecimento em que estamos inseridos, nossa empresa possui conjunto de ferramentas robusto para identificar atividades suscetíveis à corrupção e outras ilegalidades. Este sistema é constantemente avaliado, revisado e aprimorado, com foco na melhoria contínua da prevenção e fiscalização de potenciais desvios de conduta.</p>

                        <p>Um destes mecanismos é a disponibilidade do Canal de Transparência, que garante proteção de informações e anonimato para denunciantes que identifiquem indícios de irregularidades. Para conhecer este espaço ou registrar uma notificação, acesse:</p>

                        <a href="{{ url_locale('canal-de-transparencia') }}" class="btn btn-primary my-2">Canal de transparência</a>

                        <p>Nesta plataforma e em todos os outros ambientes digitais ou físicos da <strong>Sulplast</strong>, a segurança de dados é prioridade máxima. Com estrutura de cibersegurança eficiente – conforme disposições da Lei Geral de Proteção de Dados Pessoais (LGPD - Lei Federal 13.709/2018) e outras normativas vigentes – nos comprometemos a proteger todas as informações enviadas à nossa empresa. Clique nos links abaixo para saber mais sobre o assunto:</p>

                        <a href="{{ env('APP_URL') }}pt-br/pdf/politica-privacidade.pdf" class="btn btn-primary my-2">Política de Privacidade</a><br>
                        <a href="{{ env('APP_URL') }}pt-br/pdf/politica-seguranca-da-informacao.pdf" class="btn btn-primary my-2">Política de Segurança da Informação</a><br>
                        <a href="{{ url_locale('converse-dpo') }}" class="btn btn-primary my-2">Converse com o DPO Sulplast</a>

						<p>Nesta plataforma e em todos os outros ambientes digitais ou físicos da SULPLAST, a segurança de dados é prioridade máxima. Com estrutura de cibersegurança eficiente – conforme disposições da Lei Geral de Proteção de Dados Pessoais (LGPD - Lei Federal 13.709/2018) e outras normativas vigentes – nos comprometemos a proteger todas as informações enviadas à nossa empresa.)</p>

						<p>Além disso, também possuímos princípios e práticas efetivas ligadas a Segurança, Saúde, Meio Ambiente e outros temas relativos à governança corporativa. Conheça algumas de nossas políticas por meio dos links:</p>
						<a href="{{ url_locale('empresa.politica-da-saude-e-seguranca') }}" class="btn btn-primary my-2">Política de Saúde e Segurança</a><br>
						<a href="{{ url_locale('empresa.plano-de-contingencia') }}" class="btn btn-primary my-2">Plano de Contingência COVID-19</a><br>
						
						<p>Mas cientes de que promover a ética é uma missão coletiva, assumimos o compromisso de trabalhar com Parceiros de Negócios que compartilhem destes mesmos valores e estejam habilitados a implementar ações semelhantes em suas operações.</p>
						<p>Para saber mais sobre as nossas estratégias de governança e compliance, acesse a Política de Ética Empresarial e Sustentabilidade SULPLAST clicando no botão abaixo:</p>
						<a href="{{ url_locale('empresa.politica-de-etica-empresarial-e-sustentabilidade') }}" class="btn btn-primary my-2">Política de Ética empresarial e Sustentabilidade</a><br>
					</div>
				</div>
			</div>
		</div>

	
		<!-- Footer -->
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
