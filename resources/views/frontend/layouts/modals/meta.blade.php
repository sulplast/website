<form action="{{ url(app()->getLocale() . '/atualizar-pagina') }}" method="post">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<div class="modal fade" id="m-meta" tabindex="-1" style="z-index: 9999;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Informações Meta</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="slug" value="{{ isset($pagina) ? $pagina->slug : null }}">
					<div class="row form-group">
						<div class="col-lg-12">
							<label class="control-label" for="meta_title">Meta title</label>
							<input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ isset($pagina) ? $pagina->meta_title : null }}">
							<small class="help-block">Informe a meta-title desta página.</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12">
							<label class="control-label" for="meta_description">Meta description</label>
							<input type="text" class="form-control" name="meta_description" id="meta_description" value="{{ isset($pagina) ? $pagina->meta_description : null }}">
							<small class="help-block">Informe a meta-description desta página.</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12">
							<label class="control-label" for="meta_keywords">Meta keywords</label>
							<input type="text" class="form-control" name="meta_keywords" id="meta_keywords" value="{{ isset($pagina) ? $pagina->meta_keywords : null }}">
							<small class="help-block">Informe a meta-keywords desta página.</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-12">
							<label class="control-label" for="meta_misc">Outras meta tags</label>
							<textarea type="text" class="form-control" name="meta_misc" id="meta_misc" rows="20">{{ isset($pagina) ? $pagina->meta_misc : null }}</textarea>
							<small class="help-block">Informe outras metas-tags que podem fazer parte desta página.</small>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Atualizar página</button>
				</div>
			</div>
		</div>
	</div>
</form>
