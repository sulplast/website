<?php
	$pagina = App\Pagina::returnPage('inicio');
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
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/estilos.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/font-awesome.css')); ?>">

	<!-- Loading the Favicon and App icons -->
	<link rel="icon" type="image/png" href="<?php echo e(asset_locale('/images/favicon.png')); ?>" />
	<link rel="apple-touch-icon" href="<?php echo e(asset_locale('/images/mobile-icon.png')); ?>">

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.touch.js')); ?>" defer></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" defer></script>
</head>
<body>
	<div class="main">
	
		<!-- Header -->
		<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Carousel -->
		<div id="carousel-sulplast" class="carousel slide" data-ride="carousel" style="border-top: #ddd 1px solid; border-bottom: #ddd 1px solid;">

			<!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-toggle="tooltip" title="40 Anos Sulplast" data-target="#carousel-sulplast" data-slide-to="0" class="active"></li>
				<li data-toggle="tooltip" title="Termoplástico" data-target="#carousel-sulplast" data-slide-to="1"></li>
				<li data-toggle="tooltip" title="Fibra de vidro" data-target="#carousel-sulplast" data-slide-to="2"></li>
				<li data-toggle="tooltip" title="Pintura classe A" data-target="#carousel-sulplast" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper para os slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="app-carousel-container" style="background: url('<?php echo e(asset_locale('/images/carousel/40-anos-background.jpg')); ?>') no-repeat center center; background-size: cover;">
						<div class="container" style="display: flex; align-items: center;">
							<div class="row">
								<div class="col-md-offset-1 col-md-4">
									<img src="<?php echo e(asset_locale('/images/carousel/40-anos.png')); ?>" alt="40 anos de Sulplast" class="img-responsive">
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-5" style="margin-top: 30px;">
									<h1><?php echo e(__('home.slider.40anos.titulo')); ?></h1>
									<p><?php echo e(__('home.slider.40anos.descricao')); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Termoplástico -->
				<div class="item">
					<div class="app-carousel-container" style="background: url('<?php echo e(asset_locale('/images/carousel/background.jpg')); ?>') no-repeat center center; background-size: cover;">
						<div class="container">
							<div class="carousel-text">
								<h1><?php echo e(__('home.slider.termoplastico.titulo')); ?></h1>
								<p><?php echo __('home.slider.termoplastico.descricao'); ?></p>
							</div>
							<div class="carousel-topics-container">
								<div class="carousel-topics">
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.termoplastico.item001')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.termoplastico.item002')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.termoplastico.item003')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.termoplastico.item004')); ?></div>
									</div>
									<div class="carousel-topics-background"></div>
								</div>
							</div>
							<div class="carousel-image">
								<img src="<?php echo e(asset_locale('/images/carousel/termo-imagem.png')); ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				
				<!-- Fibra de vidro -->
				<div class="item">
					<div class="app-carousel-container" style="background: url('<?php echo e(asset_locale('/images/carousel/background.jpg')); ?>') no-repeat center center; background-size: cover;">
						<div class="container">
							<div class="carousel-text">
								<h1><?php echo e(__('home.slider.fibra.titulo')); ?></h1>
								<p><?php echo __('home.slider.fibra.descricao'); ?></p>
							</div>
							<div class="carousel-topics-container">
								<div class="carousel-topics">
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.fibra.item001')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.fibra.item002')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.fibra.item003')); ?></div>
									</div>
									<div class="carousel-topics-background"></div>
								</div>
							</div>
							<div class="carousel-image">
								<img src="<?php echo e(asset_locale('/images/carousel/fibra-imagem.png')); ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				
				<!-- Pintura -->
				<div class="item">
					<div class="app-carousel-container" style="background: url('<?php echo e(asset_locale('/images/carousel/background.jpg')); ?>') no-repeat center center; background-size: cover;">
						<div class="container">
							<div class="carousel-text">
								<h1><?php echo e(__('home.slider.pintura.titulo')); ?></h1>
								<p><?php echo __('home.slider.pintura.descricao'); ?></p>
							</div>
							<div class="carousel-topics-container">
								<div class="carousel-topics">
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.pintura.item001')); ?></div>
									</div>
									<div class="topic">
										<div class="icon"></div>
										<div class="text"><?php echo e(__('home.slider.pintura.item002')); ?></div>
									</div>
									<div class="carousel-topics-background"></div>
								</div>
							</div>
							<div class="carousel-image">
								<img src="<?php echo e(asset_locale('/images/carousel/pintura-imagem.png')); ?>" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Sobre -->
		<div class="sobre">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<?php echo App\Conteudo::show('intro-empresa'); ?>

						<hr>
					</div>
					<div class="col-md-5">
						<img class="sobre-imagem" src="<?php echo e(asset_locale('/images/sulplast-circulo.png')); ?>" alt="">
					</div>
				</div>
				<div class="sobre-rodape">
					<a class="btn btn-primary" href="<?php echo e(url_locale('empresa')); ?>"><?php echo e(__('home.sobre_a_sulplast')); ?></a>
					<div class="sobre-rodape-certificados">
						<div class="col-xs-6 col-sm-3 col-md-2 sobre-rodape-certificados-item"><img width="120" src="<?php echo e(asset_locale('/images/certificados/q1.png')); ?>" class="img-responsive" alt="Certificado Q1 - Ford" title="Certificado Q1"></div>
						<div class="col-xs-6 col-sm-3 col-md-2 sobre-rodape-certificados-item"><img width="120" src="<?php echo e(asset_locale('/images/certificados/selo-vda-63.png')); ?>" class="img-responsive" alt="Certificado VDA 6.3" title="Certificado VDA 6.3"></div>
						<div class="col-xs-6 col-sm-3 col-md-2 sobre-rodape-certificados-item"><img width="120" src="<?php echo e(asset_locale('/images/certificados/selo-iso9001.png')); ?>" class="img-responsive" alt="Certificado ISO 9001" title="Certificado ISO 9001"></div>
						<div class="col-xs-6 col-sm-3 col-md-2 sobre-rodape-certificados-item"><img width="120" src="<?php echo e(asset_locale('/images/certificados/selo-iso14001.png')); ?>" class="img-responsive" alt="Certificado ISO 14001" title="Certificado ISO 14001"></div>
						<div class="col-xs-6 col-sm-3 col-md-2 sobre-rodape-certificados-item" ><img width="120" src="<?php echo e(asset_locale('/images/certificados/selo-iatf16949.png')); ?>" class="img-responsive" alt="Certificado IATF 16949" title="Certificado IATF 16949"></div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Setor automotivo -->
		<div class="setor-automotivo">
			<div class="row no-gutter">
				<div class="col-xs-10 col-xs-offset-1 col-md-4">
					<?php echo App\Conteudo::show('intro-automotivo'); ?>

				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="background"></div>
				</div>
			</div>
		</div>
		
		<!-- Setor agrícola -->
		<div class="setor-agricola">
			<div class="row no-gutter">
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-push-6">
					<?php echo App\Conteudo::show('intro-agricola'); ?>

				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-1 col-md-pull-6">
					<div class="background"></div>
				</div>
			</div>
		</div>
		
		<!-- Setor civil -->
		<div class="setor-civil">
			<div class="row no-gutter">
				<div class="col-xs-10 col-xs-offset-1 col-md-4">
					<?php echo App\Conteudo::show('intro-construcao-mineracao'); ?>

				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="background"></div>
				</div>
			</div>
		</div>

		<!-- Setor agrícola -->
		<div class="setor-diversos">
			<div class="row no-gutter">
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-push-6">
					<?php echo App\Conteudo::show('intro-setores-economia'); ?>

				</div>
				<div class="col-xs-12 col-md-6 col-md-offset-1 col-md-pull-6">
					<div class="background" style="background-image: url('<?php echo e(asset_locale('/images/diversos-setores-da-economia.jpg')); ?>'); background-repeat: no-repeat"></div>
				</div>
			</div>
		</div>

		<!-- Meio ambiente -->
		<div class="meio-ambiente" styler="overflow-x: hidden;">
			<div class="container">
				<div class="row">
					<div class="col-md-5 dark">
						<ul class="nav-tab">
							<li class="active"><a data-toggle="tab" href="#certificacoes"><i class="fas fa-certificate"></i> &ensp; <?php echo e(__('home.certificacoes')); ?></a></li>
							<li><a data-toggle="tab" href="#premios"><i class="fas fa-trophy"></i> &ensp; <?php echo e(__('home.premios')); ?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="certificacoes">
								<?php echo App\Conteudo::show('intro-certificacoes'); ?>

							</div>
							<div class="tab-pane" id="premios">
								<?php echo App\Conteudo::show('intro-premios'); ?>

							</div>
						</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-2">
						<?php echo App\Conteudo::show('intro-meio-ambiente'); ?>

					</div>
				</div>
			</div>
			<div class="background-split left" style="background: url('<?php echo e(asset_locale('/images/background-split-image.jpg')); ?>')">
			</div>
			<div class="background-split right"></div>
		</div>

		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>


	<!-- Prêmio CNH -->
	<!-- <div id="m-premio" class="modal fade" tabindex="-1" role="dialog" style="z-index: 99999;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="font-size: 120%;">Sulplast ganha prêmio CNH</h4>
				</div>
				<div class="modal-body">
					<p style="margin-top: 0; font-size: 95%">No dia 15 de setembro, durante o <strong>Supplier Excellence Awards 2020</strong>, a <strong>Sulplast</strong> foi eleita vencedora da Categoria Parceria Comercial, no Segmento Agricultura.</p>

					<img src="<?php echo e(asset('images/premio-cnh.jpg')); ?>" class="img-responsive">
				</div>
			</div>
		</div>
	</div> -->

	<script type="text/javascript">

		// $(window).on('load', function() {
		// 	$('#m-premio').modal('show');
		// });

		$(function() {
			$(".carousel").swipe({
				swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
					if (direction == 'left') $(this).carousel('next');
					if (direction == 'right') $(this).carousel('prev');
				},
				allowPageScroll:"vertical"
			});
		});
	</script>
</body>
</html>
<?php /**PATH /home/pedroroccon/projetos/sulplast/resources/views/frontend/index.blade.php ENDPATH**/ ?>