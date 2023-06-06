<div class="sp-sidebar">
	<div class="col-md-3 col-md-offset-1">
		<h4 class="h4">{{ __('meio_ambiente.sidebar.saiba_mais') }}</h4>
		<br>
		<ul class="list-style-sulplast list-style-images">
			<li><a class="{!! locale_request_is('meio-ambiente', null) ? 'active' : 'inactive' !!}" href="{{ url_locale('meio-ambiente') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('meio_ambiente.sidebar.a_sulplast_e_o_meio_ambiente') }}</span></a></li>
			<li><a class="{!! locale_request_is('meio-ambiente.ciclo-de-vida-do-produto') ? 'active' : 'inactive' !!}" href="{{ url_locale('meio-ambiente.ciclo-de-vida-do-produto') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('meio_ambiente.sidebar.ciclo_de_vida_do_produto') }}</span></a></li>
			<li><a class="{!! locale_request_is('meio-ambiente.fornecedores-e-meio-ambiente') ? 'active' : 'inactive' !!}" href="{{ url_locale('meio-ambiente.fornecedores-e-meio-ambiente') }}"><i class="fas fa-arrow-right"></i><span class="text">{{ __('meio_ambiente.sidebar.fornecedores_e_meio_ambiente') }}</span></a></li>
		</ul>
		<br>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('fale-conosco') }}">
				<span class="card-link-title">{{ __('meio_ambiente.sidebar.comunicacoes_ambientais') }}</span>
				<span class="card-link-description">{{ __('meio_ambiente.sidebar.comunicacoes_ambientais_descricao') }}</span>
			</a>
		</div>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('fale-conosco.localizacao') }}">
				<span class="card-link-title">{{ __('meio_ambiente.sidebar.localizacao') }}</span>
				<span class="card-link-description">{{ __('meio_ambiente.sidebar.localizacao_descricao') }}</span>
				<i class="card-link-icon fa fa-map-marker-alt"></i>
			</a>
		</div>
	</div>
</div>
