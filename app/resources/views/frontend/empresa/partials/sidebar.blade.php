<div class="sp-sidebar">
	<div class="col-md-3 col-md-offset-1">
		<h4 class="h4">{{ __('empresa.sidebar.conheca_a_sulplast') }}</h4>
		<br>
		<ul class="list-style-sulplast list-style-images">
			<li><a class="{!! locale_request_is('empresa', null) ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('empresa.sidebar.quem_somos') }}</span></a></li>
			<li><a class="{!! locale_request_is('empresa.politica-da-qualidade') ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa.politica-da-qualidade') }}"><i class="fas fa-arrow-right" style="height: 23px; display: block; float: left;"></i><span class="text">{{ __('empresa.sidebar.politica_da_qualidade') }}</span></a></li>
			<li><a class="{!! locale_request_is('empresa.missao-e-visao') ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa.missao-e-visao') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('empresa.sidebar.missao_e_visao') }}</span></a></li>
			<li><a class="{!! locale_request_is('empresa.politica-de-etica-empresarial-e-sustentabilidade') ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa.politica-de-etica-empresarial-e-sustentabilidade') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('empresa.sidebar.codigo_de_conduta_e_etica') }}</span></a></li>
			<li><a class="{!! locale_request_is('empresa.plano-de-contingencia') ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa.plano-de-contingencia') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('empresa.sidebar.plano-de-contingencia') }}</span></a></li>
			<li><a class="{!! locale_request_is('empresa.politica-da-saude-e-seguranca') ? 'active' : 'inactive' !!}" href="{{ url_locale('empresa.politica-da-saude-e-seguranca') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('empresa.sidebar.politica-da-saude-e-seguranca') }}</span></a></li>
		</ul>
		<br>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('fale-conosco') }}">
				<span class="card-link-title">{{ __('empresa.sidebar.fale_conosco') }}</span>
				<span class="card-link-description">{{ __('empresa.sidebar.fale_conosco_descricao') }}</span>
			</a>
		</div>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('fale-conosco.localizacao') }}">
				<span class="card-link-title">{{ __('empresa.sidebar.mapa_localizacao') }}</span>
				<span class="card-link-description">{{ __('empresa.sidebar.mapa_localizacao_descricao') }}</span>
				<i class="card-link-icon fa fa-map-marker-alt"></i>
			</a>
		</div>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('trabalhe-conosco') }}">
				<span class="card-link-title">{{ __('empresa.sidebar.trabalhe_conosco') }}</span>
				<span class="card-link-description">{{ __('empresa.sidebar.trabalhe_conosco_descricao') }}</span>
			</a>
		</div>
		<div class="card-link card-link-default card-link-hover-secondary">
			<a href="{{ url_locale('meio-ambiente') }}">
				<span class="card-link-title">{{ __('empresa.sidebar.meio_ambiente') }}</span>
				<span class="card-link-description">{{ __('empresa.sidebar.meio_ambiente_descricao') }}</span>
			</a>
		</div>
	</div>
</div>
