<?php
	$pagina = App\Pagina::returnPage('empresa-politica-da-saude-e-seguranca');
?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo e($pagina->meta_description); ?>">
	<meta name="keywords" content="<?php echo e($pagina->meta_keywords); ?>">
	<meta name="author" content="Pedro Roccon">
	<title><?php echo e($pagina->meta_title); ?></title>
	<?php echo $pagina->meta_misc; ?>


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/estilos.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/font-awesome.css')); ?>">

	<!-- Loading the Favicon and App icons -->
	<link rel="icon" type="image/png" href="<?php echo e(asset_locale('/images/favicon.png')); ?>" />
	<link rel="apple-touch-icon" href="<?php echo e(asset_locale('/images/mobile-icon.png')); ?>">

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/parallax.min.js')); ?>"></script>

	<style type="text/css">

		.s-politica-da-saude {
			margin: 40px 0;
		}

		.s-politica-da-saude .row {
			align-items: flex-start;
			flex-shrink: 0;
    		flex-grow: 1;
		}

		.s-politica-da-saude .col-lg-6 {
			height: 100%;
		}

		.s-politica-da-saude .card {
			margin: 20px 0;
			height: 100%;
			box-sizing: border-box;
			padding: 15px;
			border-radius: 10px;
			box-shadow: rgba(0, 0, 0, .25) 0 1px 20px;
		}
	</style>
</head>
<body>
	<div class="main">

		<!-- Header -->
		<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<!-- Subpage header -->
		<?php echo $__env->make('frontend.layouts.components.sp-header', ['title' => $pagina->titulo], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Breadcrumbs -->
		<?php echo Breadcrumbs::render('empresa-politica-da-saude-e-seguranca'); ?>


		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="h2">Política da saúde e segurança</h2>
						<p>A SULPLAST assegura que Saúde e Segurança do Trabalho (SST) são valores fundamentais de sua cultura corporativa e garante a prevenção como diretriz de todas as operações relacionadas a:</p>
						<ul class="list-style-check">
							<li><strong>Segurança</strong> das pessoas, processos, produtos, informações e patrimônio;</li>
							<li><strong>Saúde</strong> ocupacional do ser humano;</li>
							<li><strong>Qualidade</strong> e continuidade dos processos;</li>
							<li><strong>Legislações</strong> de SST devidamente aplicadas à organização.</li>
						</ul>

						<!-- Tabela -->
						<div class="s-politica-da-saude">
							<div class="row">
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 280px">
										<h4 class="h4">1. Compromisso com a liderança</h4>
										<p>Trabalhar sempre orientados por cultura que sustente o comprometimento de nossas lideranças na prevenção de acidentes e doenças ocupacionais.</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 280px">
										<h4 class="h4">2. Treinamento e Conscientização</h4>
										<p>Assegurar treinamento eficaz para todos os empregados que desenvolvam atividades que possam causar impacto na Saúde e Segurança.</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 320px;">
										<h4 class="h4">3. Prevenção de Acidentes e Incidentes</h4>
										<p>Atuar continuamente na identificação, avaliação e controle dos riscos de Saúde e Segurança, para reduzir ou eliminar todos perigos inerentes às operações, com o intuito de prevenir ao máximo lesões e doenças.</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 320px;">
										<h4 class="h4">4. Conformidade legal</h4>
										<p>Cumprir os requisitos legais aplicáveis à organização e os outros por ela subscritos, que tenham relação com a Saúde e Segurança.</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 360px;">
										<h4 class="h4">5. Preparação para Emergências/Proteção contra Incêndio</h4>
										<p>Estabelecer, implementar e manter procedimentos capazes de garantir a eficácia nas ações de controle sobre os riscos da Saúde e Segurança, assim como no atendimento e resposta às urgência e emergências.</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 360px;">
										<h4 class="h4">6. Assistência Médica/Medicina no Trabalho</h4>
										<p>A SULPLAST se empenhará continuamente para promover as boas práticas de saúde e manter sempre atualizado o PCMSO.</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 390px;">
										<h4 class="h4">7. Segurança de Máquinas/ Manuseio de Produtos Químicos</h4>
										<p>Buscar eliminar ou neutralizar os perigos existentes no ambiente de trabalho, minimizando exposições a riscos em máquinarios e durante o manuseio de produtos químicos.</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card card-body" style="min-height: 390px;">
										<h4 class="h4">8. Ergonomia Local/ Equipamento de Proteção Individual - EPI</h4>
										<p>Conscientizar os colaboradores para que exerçam suas atividades utilizando técnicas ergonômicas que priorizam o bem-estar durante o trabalho e o monitorar o uso adequado dos equipamentos de proteção individual conforme atividade.</p>
									</div>
								</div>
							</div>

							<div class="row">
								
								
							</div>
						</div>

						<p>Esta Política formaliza o comprometimento da Alta Administração para a Gestão do Sistema de Saúde e Segurança da Sulplast Fibra de Vidro e Termoplástico Ltda.</p>

						<hr>
						<a href="../../pt-br/pdf/politica-da-saude-e-seguranca.pdf" target="_blank" class="btn">Baixar a Política de Saúde e Segurança (PDF)</a>
					</div>
					
					<?php echo $__env->make('frontend.empresa.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				</div>
			</div>
		</div>

	
		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/empresa/politica-da-saude-e-seguranca.blade.php ENDPATH**/ ?>