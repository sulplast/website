<div class="sp-sidebar">
	<div class="col-md-offset-1 col-md-3">
		<h4 class="h4">{{ __('fale_conosco.sidebar.telefones_para_contato') }}</h4>
		<br>
		<ul class="list-style-sulplast list-style-sulplast-large">
			<li><i class="fas fa-phone text-secondary" style="font-size: 2rem;"></i>&ensp;<span class="text-primary">+55 (19) 3535-6550</span></li>
			<li><i class="fab fa-whatsapp text-secondary" style="font-size: 2rem;"></i>&ensp;<span class="text-primary">+55 (19) 9 9763-5132</span></li>
		</ul>
		<hr>
		<h4 class="h4">{{ __('fale_conosco.sidebar.email_para_contato') }}</h4>
		<br>
		<ul class="list-style-sulplast list-style-sulplast-large">
			<li><i class="fas fa-envelope text-secondary"></i>&ensp;<span class="text-primary"><a href="mailto:sulplast@sulplast.com.br">sulplast@sulplast.com.br</a></span></li>
		</ul>
		<br>
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('fale-conosco.localizacao') }}">
				<span class="card-link-title">{{ __('fale_conosco.sidebar.mapa_localizacao') }}</span>
				<span class="card-link-description">{{ __('fale_conosco.sidebar.mapa_localizacao_descricao') }}</span>
				<i class="card-link-icon fa fa-map-marker-alt"></i>
			</a>
		</div>

		@if( ! Request::is('*trabalhe-conosco'))
		<div class="card-link card-link-default card-link-hover-primary">
			<a href="{{ url_locale('trabalhe-conosco') }}">
				<span class="card-link-title">{{ __('fale_conosco.sidebar.trabalhe_conosco') }}</span>
				<span class="card-link-description">{{ __('fale_conosco.sidebar.trabalhe_conosco_descricao') }}</span>
			</a>
		</div>
		@endif

		@if( Request::is('*trabalhe-conosco'))
			<div class="card-link card-link-default card-link-hover-primary">
				<a href="{{ url_locale('vagas') }}">
					<span class="card-link-title">Vagas disponíveis</span>
					<span class="card-link-description">Consulte as nossas vagas disponíveis no momento!</span>
				</a>
			</div>
		@endif
	</div>
</div>
