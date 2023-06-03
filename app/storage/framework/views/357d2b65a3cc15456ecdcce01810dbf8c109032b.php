<?php
	$pagina = App\Pagina::returnPage('fale-conosco');
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
</head>
<body>
	<div class="main">

		<!-- Header -->
		<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<!-- Subpage header -->
		<?php echo $__env->make('frontend.layouts.components.sp-header', ['title' => $pagina->titulo], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Breadcrumbs -->
		<?php echo Breadcrumbs::render('fale-conosco'); ?>


		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2 class="h2"><?php echo e(__('fale_conosco.formulario_de_contato')); ?></h2>
						<div class="quote">
							<p class="lead"><?php echo __('fale_conosco.formulario_de_contato_descricao'); ?></p>
						</div>

						<!-- Canais de atendimento -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('comunicacoes-ambientais')); ?>">
										<span class="card-link-title">Comunicações ambientais</span>
										<span class="card-link-description">Para assuntos relacionados a comunicações ambientes, utilize nosso formulário de contrato</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('canal-de-transparencia')); ?>">
										<span class="card-link-title">Canal de transparência</span>
										<span class="card-link-description">Entre em contato conosco através do nosso formulário do canal de transparência</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('comercial')); ?>">
										<span class="card-link-title">Seja um parceiro</span>
										<span class="card-link-description">Se você está interessado em realizar uma parceria com a Sulplast, entre em contato com o nosso comercial</span>
									</a>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('trabalhe-conosco')); ?>">
										<span class="card-link-title">Trabalhe conosco</span>
										<span class="card-link-description">Se você está interessado em fazer parte da nossa equipe, veja a nossa página de vagas e envie seu currículo.</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('outros-assuntos')); ?>">
										<span class="card-link-title">Outros assuntos</span>
										<span class="card-link-description">Se nenhum canal de atendimento disponível está relacionado ao assunto que você quer tratar, utilize esta página.</span>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card-link card-link-default card-link-hover-primary" style="height: 300px;">
									<a href="<?php echo e(url_locale('converse-com-o-dpo')); ?>">
										<span class="card-link-title">Converse com o DPO</span>
										<span class="card-link-description">Para tratar assuntos relacionados a segurança e proteção de dados, utilize nosso formulário de contato direto com o DPO.</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Sidebar -->
					<?php echo $__env->make('frontend.fale-conosco.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Modal de informação -->
		<?php echo $__env->make('frontend.messages.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/fale-conosco/index.blade.php ENDPATH**/ ?>