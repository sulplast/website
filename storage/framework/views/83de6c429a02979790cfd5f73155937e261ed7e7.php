<?php
	$pagina = App\Pagina::returnPage('meio-ambiente');
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
		<?php echo Breadcrumbs::render('meio-ambiente'); ?>


		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php echo App\Conteudo::show('meio-ambiente'); ?>

					</div>

					<?php echo $__env->make('frontend.meio-ambiente.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/meio-ambiente/index.blade.php ENDPATH**/ ?>