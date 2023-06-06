<form action="<?php echo e(url_locale('fale-conosco')); ?>" method="POST">
		
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

	<div class="row form-group">
		<div class="col-md-7">
			<label class="control-label" for="nome_completo"><?php echo e(__('fale_conosco.form.nome')); ?></label>
			<input type="text" name="nome_completo" class="form-control-sulplast" required>
		</div>
		<div class="col-md-5">
			<label class="control-label" for="email"><?php echo e(__('fale_conosco.form.email')); ?></label>
			<input type="email" name="email" class="form-control-sulplast" required>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-4">
			<label class="control-label" for="telefone"><?php echo e(__('fale_conosco.form.telefone')); ?></label>
			<input type="text" name="telefone" class="form-control-sulplast telefone">
		</div>
		<div class="col-md-8">
			<label class="control-label" for="endereco"><?php echo e(__('fale_conosco.form.endereco')); ?></label>
			<input type="text" name="endereco" class="form-control-sulplast">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-4">
			<label class="control-label" for="bairro"><?php echo e(__('fale_conosco.form.bairro')); ?></label>
			<input type="text" name="bairro" class="form-control-sulplast">
		</div>
		<div class="col-md-4">
			<label class="control-label" for="cidade"><?php echo e(__('fale_conosco.form.cidade')); ?></label>
			<input type="text" name="cidade" class="form-control-sulplast">
		</div>
		<div class="col-md-4">
			<label class="control-label" for="estado"><?php echo e(__('fale_conosco.form.estado')); ?></label>
			<?php if(app()->getLocale() == 'pt_BR'): ?>
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
			<?php else: ?>
				<input type="text" name="estado" class="form-control-sulplast">
			<?php endif; ?>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="control-label" for="departamento"><?php echo e(__('fale_conosco.form.departamento')); ?></label>
			<select name="departamento" class="form-control-sulplast" required>

				<option value=""><?php echo e(app()->getLocale() == 'pt_BR' ? 'Por favor, selecione...' : 'Choose an option...'); ?></option>
				<option value="Comercial"><?php echo e(__('fale_conosco.form.departamento.comercial')); ?></option>
				<option value="Recursos Humanos"><?php echo e(__('fale_conosco.form.departamento.rh')); ?></option>
				<option value="Coordenadoria da Qualidade e Meio Ambiente"><?php echo e(__('fale_conosco.form.departamento.coq')); ?></option>
			</select>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="control-label" for="mensagem"><?php echo e(__('fale_conosco.form.mensagem')); ?></label>
			<textarea name="mensagem" cols="30" rows="5" class="form-control-sulplast"></textarea>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<div class="g-recaptcha" data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>"></div>
		</div>
	</div>
	<div class="form-footer-sulplast">
		<div class="row form-group">
			<div class="col-md-12">
				<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&emsp;<?php echo e(__('fale_conosco.form.submit')); ?></button>
			</div>
		</div>
	</div>
</form>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo e(asset('js/jquery.mask.min.js')); ?>"></script>
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
</script><?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/fale-conosco/partials/form.blade.php ENDPATH**/ ?>