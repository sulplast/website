<?php
	$pagina = App\Pagina::returnPage('noticias');
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
		<?php echo Breadcrumbs::render('noticias'); ?>


		<div class="sp-content">
			<?php if(Auth::check()): ?>
				<div class="container">
					<a href="#" class="btn btn-xs tiny-cms-apply" data-toggle="modal" data-target="#m-crud">Adicionar notícia</a>
				</div>
				<hr>
			<?php endif; ?>
			
			<div class="container">
				<?php if( ! Auth::check()): ?>
					<?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="row">
							<div class="col-md-12">
								<div class="titulo">
									<h3 class="h3"><?php echo e($noticia->titulo); ?></h2>
								</div>

								<p class="noticias-data text-muted"><i><?php echo empty($noticia->publicada_em) ? '<span class="label label-danger">Não publicada</span> &ensp; ' : 'publicado em ' . $noticia->created_at->format('d/m/Y à\s H:i:s'); ?></i></p>
								<div class="noticia-container tiny-cms">
									<?php echo str_replace('[urlTag]', url('images/noticias'), $noticia->corpo); ?>

								</div>
							</div>
						</div>
						<br><br>
						<hr>
						<br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<form action="<?php echo e(url(app()->getLocale() . '/noticias-atualizar/' . $noticia->id)); ?>" method="post">
							<input type="hidden" name="_method" value="PATCH">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<div class="row">
								<div class="col-md-12">
									<div class="titulo">
										<h3 class="h3"><?php echo e($noticia->titulo); ?></h2>
									</div>

									<p class="noticias-data text-muted"><i><?php echo empty($noticia->publicada_em) ? '<span class="label label-danger">Não publicada</span> &ensp; ' : 'publicado em ' . $noticia->created_at->format('d/m/Y à\s H:i:s'); ?></i></p>
									<div class="noticia-container tiny-cms">
										<?php echo str_replace('[urlTag]', url('images/noticias'), $noticia->corpo); ?>

									</div>
									<button type="submit" class="btn btn-primary">Salvar</button>
								</div>
							</div>
							<br><br>
							<hr>
							<br>
							</form>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
			
			<!-- Paginação -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<?php echo $noticias->render(); ?>

					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php if(Auth::check()): ?>
			<?php echo $__env->make('frontend.noticias.partials.crud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?>

	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/noticias/index.blade.php ENDPATH**/ ?>