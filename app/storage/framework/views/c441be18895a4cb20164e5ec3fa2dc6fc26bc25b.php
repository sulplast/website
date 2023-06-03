<?php if(Session::has('app_message')): ?>
	<div class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<!-- Botão para fechar -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<!-- Título da modal -->
					<h4 class="modal-title">Informações</h4>
				</div>
				<div class="modal-body">
					<p><?php echo Session::get('app_message'); ?></p>
				</div>
				<div class="modal-footer">
					 <button type="button" class="btn btn-default" data-dismiss="modal">Confirmar</button>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/messages/list.blade.php ENDPATH**/ ?>