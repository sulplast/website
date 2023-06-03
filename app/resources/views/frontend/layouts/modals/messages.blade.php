@if (Session::has('app_message'))
	<div class="modal fade" id="m-messages" tabindex="-1" style="z-index: 9999;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Mensagem</h4>
				</div>
				<div class="modal-body">
					<span>{!! Session::get('app_message') !!}</span>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(function() {
			$('#m-messages').modal('show');
		}, (jQuery))
	</script>
@endif