<?php if($errors->any()): ?>
	<div class="modal fade" id="m-errors" tabindex="-1" style="z-index: 9999;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Desculpe, não foi possível finalizar a sua solicitação</h4>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled">
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\site\app\resources\views/frontend/layouts/modals/errors.blade.php ENDPATH**/ ?>