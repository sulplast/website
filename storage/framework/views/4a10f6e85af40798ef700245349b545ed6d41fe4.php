<div class="col-md-3 col-md-offset-1">
	<div class="sp-sidebar">
		<h4 class="h4"><?php echo e(__('tecnologias_e_processos.sidebar.tecnologias_e_processos')); ?></h4>
		<br>
		
		<!-- Menu alternativo -->
		<div id="sidebarProcessos">
			<!-- Termoplástico -->
			<a class="collapse-title <?php echo locale_request_is('tecnologia-e-processos.termoplastico') ? 'collapse in' : 'collapsed'; ?>" href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.termoplastico')); ?> <i class="fas fa-arrow-right"></i></a>
			<div id="termoplastico-tab" class="panel-collapse <?php echo locale_request_is('tecnologia-e-processos.termoplastico') ? 'collapsed' : 'collapse'; ?>" style="background: #ddd;">
				<ul>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico.extrusao')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.extrusao_de_chapas')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico.vacuum-forming')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.vacuum_forming')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico.rotomoldagem')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.rotomoldagem')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico.acabamento-robotizado')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.acabamento_robotizado')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.termoplastico.injecao')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.injecao')); ?></a></li>
				</ul>
			</div>
			
			<!-- Fibra de vidro -->
			<a class="collapse-title <?php echo locale_request_is('tecnologia-e-processos.fibra-de-vidro') ? 'collapse in' : 'collapsed'; ?>"  href="<?php echo e(url_locale('tecnologia-e-processos.fibra-de-vidro')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.fibra_de_vidro')); ?> <i class="fas fa-arrow-right"></i></a>
			<div id="fibra-de-vidro-tab" class="panel-collapse <?php echo locale_request_is('tecnologia-e-processos.fibra-de-vidro') ? 'collapsed' : 'collapse'; ?>">
				<ul>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.fibra-de-vidro.hlu')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.hand_lay_up')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-light')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.resin_transfer_molding_light')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-skin')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.resin_transfer_molding_skin')); ?></a></li>
				</ul>
			</div>
			
			<!-- Pintura -->
			<a class="collapse-title <?php echo locale_request_is('tecnologia-e-processos.pintura') ? 'collapse in' : 'collapsed'; ?>" href="<?php echo e(url_locale('tecnologia-e-processos.pintura')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.pintura')); ?> <i class="fas fa-arrow-right"></i></a>
			
			<!-- Desenvolvimento de produtos -->
			<a class="collapse-title <?php echo locale_request_is('tecnologia-e-processos.desenvolvimento-de-produtos') ? 'collapse in' : 'collapsed'; ?>" href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.desenvolvimento_de_produtos')); ?> <i class="fas fa-arrow-right"></i></a>
			<div id="desenvolvimento-de-produtos-tab" class="panel-collapse <?php echo locale_request_is('tecnologia-e-processos.desenvolvimento-de-produtos') ? 'collapsed' : 'collapse'; ?>">
				<ul>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.engenharia-de-produtos')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.engenharia_de_produtos')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.laboratorio')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.laboratorio')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.gestao-do-sistema-da-qualidade')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.gestao_do_sistema_da_qualidade')); ?></a></li>
					<li><a href="<?php echo e(url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.controle-de-qualidade-e-pos-venda')); ?>"><?php echo e(__('tecnologias_e_processos.sidebar.controle_de_qualidade_e_pos_venda')); ?></a></li>
				</ul>
			</div>
		</div>
		<br>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/tecnologia/partials/sidebar.blade.php ENDPATH**/ ?>