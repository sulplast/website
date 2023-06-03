<div class="col-md-3 col-md-offset-1">
	<div class="sp-sidebar">
		<h4 class="h4">{{ __('tecnologias_e_processos.sidebar.tecnologias_e_processos') }}</h4>
		<br>
		
		<!-- Menu alternativo -->
		<div id="sidebarProcessos">
			<!-- Termoplástico -->
			<a class="collapse-title {!! locale_request_is('tecnologia-e-processos.termoplastico') ? 'collapse in' : 'collapsed' !!}" href="{{ url_locale('tecnologia-e-processos.termoplastico') }}">{{ __('tecnologias_e_processos.sidebar.termoplastico') }} <i class="fas fa-arrow-right"></i></a>
			<div id="termoplastico-tab" class="panel-collapse {!! locale_request_is('tecnologia-e-processos.termoplastico') ? 'collapsed' : 'collapse' !!}" style="background: #ddd;">
				<ul>
					<li><a href="{{ url_locale('tecnologia-e-processos.termoplastico.extrusao') }}">{{ __('tecnologias_e_processos.sidebar.extrusao_de_chapas') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.termoplastico.vacuum-forming') }}">{{ __('tecnologias_e_processos.sidebar.vacuum_forming') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.termoplastico.rotomoldagem') }}">{{ __('tecnologias_e_processos.sidebar.rotomoldagem') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.termoplastico.acabamento-robotizado') }}">{{ __('tecnologias_e_processos.sidebar.acabamento_robotizado') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.termoplastico.injecao') }}">{{ __('tecnologias_e_processos.sidebar.injecao') }}</a></li>
				</ul>
			</div>
			
			<!-- Fibra de vidro -->
			<a class="collapse-title {!! locale_request_is('tecnologia-e-processos.fibra-de-vidro') ? 'collapse in' : 'collapsed' !!}"  href="{{ url_locale('tecnologia-e-processos.fibra-de-vidro') }}">{{ __('tecnologias_e_processos.sidebar.fibra_de_vidro') }} <i class="fas fa-arrow-right"></i></a>
			<div id="fibra-de-vidro-tab" class="panel-collapse {!! locale_request_is('tecnologia-e-processos.fibra-de-vidro') ? 'collapsed' : 'collapse' !!}">
				<ul>
					<li><a href="{{ url_locale('tecnologia-e-processos.fibra-de-vidro.hlu') }}">{{ __('tecnologias_e_processos.sidebar.hand_lay_up') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-light') }}">{{ __('tecnologias_e_processos.sidebar.resin_transfer_molding_light') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.fibra-de-vidro.rtm-skin') }}">{{ __('tecnologias_e_processos.sidebar.resin_transfer_molding_skin') }}</a></li>
				</ul>
			</div>
			
			<!-- Pintura -->
			<a class="collapse-title {!! locale_request_is('tecnologia-e-processos.pintura') ? 'collapse in' : 'collapsed' !!}" href="{{ url_locale('tecnologia-e-processos.pintura') }}">{{ __('tecnologias_e_processos.sidebar.pintura') }} <i class="fas fa-arrow-right"></i></a>
			
			<!-- Desenvolvimento de produtos -->
			<a class="collapse-title {!! locale_request_is('tecnologia-e-processos.desenvolvimento-de-produtos') ? 'collapse in' : 'collapsed' !!}" href="{{ url_locale('tecnologia-e-processos.desenvolvimento-de-produtos') }}">{{ __('tecnologias_e_processos.sidebar.desenvolvimento_de_produtos') }} <i class="fas fa-arrow-right"></i></a>
			<div id="desenvolvimento-de-produtos-tab" class="panel-collapse {!! locale_request_is('tecnologia-e-processos.desenvolvimento-de-produtos') ? 'collapsed' : 'collapse' !!}">
				<ul>
					<li><a href="{{ url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.engenharia-de-produtos') }}">{{ __('tecnologias_e_processos.sidebar.engenharia_de_produtos') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.laboratorio') }}">{{ __('tecnologias_e_processos.sidebar.laboratorio') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.gestao-do-sistema-da-qualidade') }}">{{ __('tecnologias_e_processos.sidebar.gestao_do_sistema_da_qualidade') }}</a></li>
					<li><a href="{{ url_locale('tecnologia-e-processos.desenvolvimento-de-produtos.controle-de-qualidade-e-pos-venda') }}">{{ __('tecnologias_e_processos.sidebar.controle_de_qualidade_e_pos_venda') }}</a></li>
				</ul>
			</div>
		</div>
		<br>
	</div>
</div>
