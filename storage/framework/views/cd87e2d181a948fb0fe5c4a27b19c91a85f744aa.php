

<?php $__env->startSection('contentAdmin'); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<br>
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Crear Etiqueta</h4>
					</div>
					<div class="card-body">
						<?php echo Form::open(['route' => 'tags.store']); ?>

							<?php echo $__env->make('admin.tags.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/tags/create.blade.php ENDPATH**/ ?>