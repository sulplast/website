<div class="modal fade" id="m-crud" tabindex="-1" style="z-index: 9999;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Gerenciar notícias</h4>
			</div>
			<form action="{{ url(app()->getLocale() . '/admin/noticia') }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-body">
					<label for="titulo" class="control-label">Título da notícia</label>
					<input type="text" class="form-control" name="titulo">
					<small class="help-block">Informe o título da sua notícia.</small>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Atualizar página</button>
				</div>
			</form>
		</div>
	</div>
</div>
