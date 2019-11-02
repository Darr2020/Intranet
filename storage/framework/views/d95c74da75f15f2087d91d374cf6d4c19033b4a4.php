<?php $__env->startSection('contentAdmin'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 offset-md-2">
				<h3 class="text-center">Agregar Servicio</h3>
				<hr>
				<div class="card">					
					<div class="card-body">
						<?php echo Form::open(['route' => 'services.store']); ?>

							<?php echo $__env->make('admin.services.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/services/create.blade.php ENDPATH**/ ?>