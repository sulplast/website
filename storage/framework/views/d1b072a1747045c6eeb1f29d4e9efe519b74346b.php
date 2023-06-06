<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5RSPTV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
	<div class="container">
		<div class="row">

			<!-- Switch da navegação -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu"><i class="fas fa-bars"></i> Menu</button>

			<div class="col-xs-6 col-sm-5 col-md-3 logotipo">
				<a href="<?php echo e(url_locale('inicio')); ?>"><img src="<?php echo e(asset_locale('/images/logotipo-sulplast.png')); ?>" title="Sulplast" alt="Logotipo Sulplast - Termoplástico, fibra de vidro e rotomoldagem"></a>
			</div>
			<div class="col-sm-9 col-md-7 visible-sm visible-md visible-lg visible-xl" style="font-size: 60%; margin-top: 5px;">
				<div>
					<p><i class="fas fa-phone"></i> &emsp; <?php echo e(__('home.header.telefone')); ?> +55 (19) <strong>3535-6550</strong><br><i class="fas fa-envelope"></i> &emsp; E-mail: <a href="mailto:sulplast@sulplast.com.br">sulplast@sulplast.com.br</a><br><i class="fas fa-map-marker-alt"></i> &emsp; <?php echo e(__('home.header.endereco')); ?> - <a href="http://webmail.sulplast.com.br/">Webmail</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="main-navbar-linha"></div>
	<div class="main-navbar-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav main-navbar navbar-nav">
							<li><a class="<?php echo locale_request_is('empresa') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('empresa')); ?>"><?php echo e(__('nav.empresa')); ?></a></li>
							<li><a class="<?php echo locale_request_is('certificacoes-e-premios') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('certificacoes-e-premios')); ?>"><?php echo e(__('nav.certificacoes_e_premios')); ?></a></li>
							<li><a class="<?php echo locale_request_is('tecnologia-e-processos') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('tecnologia-e-processos')); ?>"><?php echo e(__('nav.tecnologias_e_processos')); ?></a></li>
							<li><a class="<?php echo locale_request_is('meio-ambiente') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('meio-ambiente')); ?>"><?php echo e(__('nav.meio_ambiente')); ?></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('nav.canais-comunicacao')); ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="dropdown-item"><a href="<?php echo e(url_locale('governanca-e-compliance')); ?>"><?php echo e(__('nav.governanca-e-complicance')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('canal-de-transparencia')); ?>"><?php echo e(__('nav.canal-de-transparencia')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('comunicacoes-ambientais')); ?>"><?php echo e(__('nav.comunicacoes-ambientes')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('converse-dpo')); ?>"><?php echo e(__('nav.converse-com-o-dpo')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('comercial')); ?>"><?php echo e(__('nav.comercial')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('outros-assuntos')); ?>"><?php echo e(__('nav.outros-assuntos')); ?></a></li>
									<li class="dropdown-item"><a href="<?php echo e(url_locale('vagas')); ?>"><?php echo e(__('nav.trabalhe-conosco')); ?></a></li>
								</ul>
							</li>
							<!-- <li><a class="<?php echo locale_request_is('fale-conosco') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('fale-conosco')); ?>"><?php echo e(__('nav.fale_conosco')); ?></a></li> -->
							<!-- <li><a class="<?php echo locale_request_is('trabalhe-conosco') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('trabalhe-conosco')); ?>"><?php echo e(__('nav.trabalhe_conosco')); ?></a></li> -->
							<li><a class="<?php echo locale_request_is('noticias') ? 'active' : 'inactive'; ?>" href="<?php echo e(url_locale('noticias')); ?>"><?php echo e(__('nav.noticias')); ?></a></li>
							<?php if(app()->getLocale() == 'en_US'): ?>
								<li><a data-toggle="tooltip" title="Português (Brasil)" href="<?php echo e(url('pt_BR')); ?>"><img src="<?php echo e(asset('svg/flag-brazil.svg')); ?>" alt="Bandeira do Brasil" width="16"></a></li>
							<?php else: ?>
								<li><a data-toggle="tooltip" title="English" href="<?php echo e(url('en_US')); ?>"><img src="<?php echo e(asset('svg/flag-eua.svg')); ?>" alt="Bandeira do Estados Unidos" width="16"></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>