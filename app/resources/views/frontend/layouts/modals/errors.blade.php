@if ($errors->any())
	<div class="modal fade" id="m-errors" tabindex="-1" style="z-index: 9999;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Desculpe, não foi possível finalizar a sua solicitação</h4>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled">
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(function() {
			$('#m-errors').modal('show');
		}, (jQuery))
	</script>
@endif