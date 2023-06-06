<!-- Aviso de cookies -->
<?php echo $__env->make('frontend.layouts.cookies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-2 logotipo">
				<a class="logotipo-img" href="<?php echo e(url_locale('inicio')); ?>"><img src="<?php echo e(asset_locale('/images/logotipo-sulplast-rodape.png')); ?>" alt="Logotipo Sulplast"></a>
				<a href="#"><img src="<?php echo e(asset_locale('/images/duns.png')); ?>" alt="D&B D-U-N-S Registered" title="D&B D-U-N-S Registered"></a>
			</div>
			<div class="col-md-9 col-md-offset-1">
				<div class="row">
					<nav class="menu-footer">
						<div class="menu-footer-col">
							<p><?php echo e(__('footer.empresa')); ?></p>
							<ul>
								<li><a href="<?php echo e(url_locale('empresa')); ?>"><?php echo e(__('footer.quem_somos')); ?></a></li>
								<li><a href="<?php echo e(url_locale('empresa.missao-e-visao')); ?>"><?php echo e(__('footer.missao_e_visao')); ?></a></li>
								<li><a href="<?php echo e(url_locale('certificacoes-e-premios')); ?>"><?php echo e(__('footer.certificacoes_e_premios')); ?></a></li>
								<li><a href="<?php echo e(url_locale('empresa.codigo-de-conduta-e-etica')); ?>"><?php echo e(__('footer.codigo_de_conduta_e_etica')); ?></a></li>
								<li><a href="<?php echo e(url_locale('noticias')); ?>"><?php echo e(__('footer.noticias')); ?></a></li>
							</ul>
						</div>
						<div class="menu-footer-col">
							<p><?php echo e(__('footer.tecnologias_e_processos')); ?></p>
							<ul>
								<li><a href="<?php echo e(url_locale('tecnologia-e-processos')); ?>"><?php echo e(__('footer.tecnologias_e_processos')); ?></a></li>
								<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico')); ?>"><?php echo e(__('footer.termoplastico')); ?></a></li>
								<li><a href="<?php echo e(url_locale('tecnologia-e-processos.fibra-de-vidro')); ?>"><?php echo e(__('footer.fibra_de_vidro')); ?></a></li>
								<li><a href="<?php echo e(url_locale('tecnologia-e-processos.pintura')); ?>"><?php echo e(__('footer.pintura')); ?></a></li>
								<li><a href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos')); ?>"><?php echo e(__('footer.desenvolvimento_de_produtos')); ?></a></li>
							</ul>
						</div>
						<div class="menu-footer-col">
							<p><?php echo e(__('footer.meio_ambiente')); ?></p>
							<ul>
								<li><a href="<?php echo e(url_locale('meio-ambiente')); ?>"><?php echo e(__('footer.a_sulplast_e_o_meio_ambiente')); ?></a></li>
								<li><a href="<?php echo e(url_locale('meio-ambiente.fornecedores-e-meio-ambiente')); ?>"><?php echo e(__('footer.ciclo_de_vida_do_produto')); ?></a></li>
								<li><a href="<?php echo e(url_locale('meio-ambiente.ciclo-de-vida-do-produto')); ?>"><?php echo e(__('footer.fornecedores_e_meio_ambiente')); ?></a></li>
							</ul>
						</div>
						<div class="menu-footer-col">
							<p><?php echo e(__('footer.fale_conosco')); ?></p>
							<ul>
								<li><a href="<?php echo e(url_locale('fale-conosco')); ?>"><?php echo e(__('footer.fale_conosco')); ?></a></li>
								<li><a href="<?php echo e(url_locale('fale-conosco.localizacao')); ?>"><?php echo e(__('footer.localizacao')); ?></a></li>
								<li><a href="<?php echo e(url_locale('trabalhe-conosco')); ?>"><?php echo e(__('footer.trabalhe_conosco')); ?></a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="informacoes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><?php echo e(date('Y')); ?> - <?php echo __('footer.creditos'); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Modals -->
<?php echo $__env->make('frontend.layouts.modals.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.layouts.modals.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.layouts.modals.creditos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(Auth::check()): ?>
	<div style="position: fixed; bottom: 20px; right: 20px;">
		<a href="#" data-toggle="modal" data-target="#m-meta" class="btn btn-xs tiny-cms-apply">Configurações</a>
		<a href="<?php echo e(url('/auth/logout')); ?>" class="btn btn-xs tiny-cms-apply">Sair</a>
	</div>
	<?php echo $__env->make('frontend.layouts.modals.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<script src="<?php echo e(asset('js/jquery.mask.min.js')); ?>"></script>
<script>
	$(function()
	{
		// Enable tooltip.
		$('[data-toggle="tooltip"]').tooltip();

		// Máscara para telefones
		var SPMaskBehavior = function (val) {
      		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
		onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};
		$('.mask-telefone').mask(SPMaskBehavior, spOptions);

		// Máscara para campos apenas textos
		$('.mask-text-only').keypress(function(event){
			var inputValue = event.which;
			// allow letters and whitespaces only
			if(!(inputValue >= 65 && inputValue <= 90) && !(inputValue >= 97 && inputValue <= 122) && !(inputValue == 32)) {
				event.preventDefault();
			}
		});

		$('.mask-text-and-number-only').keypress(function(event){
			var inputValue = event.which;
			// allow letters, numbers, and whitespaces only
			if(!(inputValue >= 65 && inputValue <= 90) && !(inputValue >= 97 && inputValue <= 122) && !(inputValue >= 48 && inputValue <= 57) && !(inputValue == 32)) {
				event.preventDefault();
			}
		});
	});
</script>

<?php echo $__env->make('frontend.layouts.cms', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>