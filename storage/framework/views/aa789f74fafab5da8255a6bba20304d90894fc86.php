<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Pedro Roccon">
	<title>Vagas | Sulplast - Fibra de vidro e Termoplástico</title>

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
		<?php echo $__env->make('frontend.layouts.components.sp-header', ['title' => 'Vagas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Breadcrumbs -->
		<?php echo Breadcrumbs::render('vagas'); ?>


        <!-- Vagas disponíveis -->
        <?php

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

        ?>

		<div class="sp-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <?php if(count($vagas)): ?>
                            <?php $__currentLoopData = $vagas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div style="margin-bottom: 30px; padding: 40px; box-sizing: border-box; background: #eee;">
                                    <h3 class="h3 text-primary"><?php echo $vaga['titulo']; ?></h3>
                                    <p><?php echo $vaga['descricao']; ?></p>

                                    <?php if(isset($vaga['requisitos'])): ?>
                                        <p><strong>Requisitos</strong></p>
                                        <p>
                                        <?php $__currentLoopData = explode(';', $vaga['requisitos']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            - <?php echo $requisito; ?><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if(isset($vaga['desejavel'])): ?>
                                        <p><strong>Requisitos</strong></p>
                                        <p>
                                        <?php $__currentLoopData = explode(';', $vaga['desejavel']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desejavel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            - <?php echo $desejavel; ?><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <hr>

                            <h2 class="h2">Candidate-se a uma vaga</h2>
                            <p class="lead">Preencha o formulário abaixo para candidatar-se a uma das nossas vagas disponíveis</p>
                            <?php echo $__env->make('frontend.fale-conosco.partials.trabalhe-conosco', ['vagas' => $vagas], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php else: ?>
                            <div class="alert alert-info">
                                <strong>No momento não estamos com processos seletivos abertos. Mas fique atento ao nosso site e mídias sociais, para saber quando aparecer uma nova vaga no time <strong>Sulplast</strong>
                            </div>
                        <?php endif; ?>
					</div>
                    <div class="col-md-offset-1 col-md-3">
                        <h4 class="h4">Não encontrou uma vaga para você?</h4>
                        <p>Utilize o nosso formulário "Trabalhe conosco" e deixe seu currículo cadastrado em nosso banco de talentos. Nós iremos te avisar caso uma vaga esteja disponível e você seja selecionado</p>
                        <br>
                        <a href="<?php echo e(url_locale('trabalhe-conosco')); ?>" class="btn btn-primary">Envie seu currículo</a>
                    </div>
				</div>
			</div>
		</div>

	
		<!-- Footer -->
		<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/vagas/index.blade.php ENDPATH**/ ?>