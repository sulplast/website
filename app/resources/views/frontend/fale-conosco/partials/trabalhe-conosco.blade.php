<form action="{{ url_locale('trabalhe-conosco') }}" enctype="multipart/form-data" method="POST">
		
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">

	@if (isset($vagas))
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label" for="estado">Qual vaga você deseja enviar o seu currículo? (*)</label>
				<select name="vaga" id="vaga" class="form-control-sulplast">
					<option value="">Por favor, selecione...</option>
					@foreach($vagas as $vaga)
						<option value="{{ $vaga['titulo'] }}">{{ $vaga['titulo'] }}</option>
					@endforeach
				</select>
			</div>
		</div>
	@endif

	<div class="row form-group">
		<div class="col-md-7">
			<label class="control-label" for="nome_completo">{{ __('trabalhe_conosco.form.nome') }}</label>
			<input type="text" name="nome_completo" class="form-control-sulplast mask-text-only" required>
		</div>
		<div class="col-md-5">
			<label class="control-label" for="email">{{ __('trabalhe_conosco.form.email') }}</label>
			<input type="email" name="email" class="form-control-sulplast" required>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-4">
			<label class="control-label" for="telefone">{{ __('trabalhe_conosco.form.telefone') }} (*)</label>
			<input type="text" name="telefone" class="form-control-sulplast telefone">
		</div>
		<div class="col-md-4">
			<label class="control-label" for="cidade">{{ __('trabalhe_conosco.form.cidade') }} (*)</label>
			<input type="text" name="cidade" class="form-control-sulplast mask-text-only">
		</div>
		<div class="col-md-4">
			<label class="control-label" for="estado">{{ __('trabalhe_conosco.form.estado') }} (*)</label>
			@if (app()->getLocale() == 'pt_BR')
				<select name="estado" id="estado" class="form-control-sulplast">
					<option value="">Por favor, selecione...</option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
					<option value="EX">Estrangeiro</option>
				</select>
			@else
				<input type="text" name="estado" class="form-control-sulplast">
			@endif
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="control-label" for="mensagem">{{ __('trabalhe_conosco.form.mensagem') }}</label>
			<textarea name="mensagem" cols="30" rows="5" class="form-control-sulplast"></textarea>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<div class="input-curriculum-container">
				<input type="file" name="arquivo">
				<hr>
				<p><strong>{{ __('trabalhe_conosco.form.anexo_ajuda') }}</strong></p>
			</div>
		</div>
		
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
		</div>
	</div>
	<hr>
	<div class="form-footer-sulplast">
		<small>
			Ao participar dos processos seletivos ou cadastrar o seu currículo no Banco de Talentos da SULPLAST FIBRA DE VIDRO E TERMOLPÁSTICO LTDA. os candidatos concordam com a política da empresa para tratamento de dados pessoais para finalidade específica.<br>
			Em conformidade com as disposições da Lei Geral de Proteção de Dados Pessoais (LGPD - Lei Federal 13.709/2018) e outras normativas vigentes, assumimos o compromisso de proteger todas as informações pessoais enviadas à nossa empresa. Além disso, garantimos que os dados coletados serão utilizados e compartilhados apenas para os propósitos ligados aos processos de recrutamento e seleção, ou cumprimento de obrigações judiciais.<br>
			Para mais detalhes sobre o assunto, acesse nossa <a href="{{ env('APP_URL') }}/pt-br/pdf/politica-privacidade.pdf">Política de Privacidade</a>. 
		</small>

		<div class="row form-group" style="margin-top: 20px">
			<div class="col-md-12">
				<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&emsp;{{ __('trabalhe_conosco.form.submit') }}</button>
			</div>
		</div>
	</div>
</form>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script>
	$(function() {
		var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00)00000-0000' : '(00)0000-00009';
		},
		spOptions = {
			onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		}

		$('.telefone').mask(SPMaskBehavior, spOptions);

	}, (jQuery));
</script>