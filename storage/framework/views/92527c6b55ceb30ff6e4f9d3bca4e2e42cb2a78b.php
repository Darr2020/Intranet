<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Crear Noticias</h3>
					</div>
					<div class="card-body">
						<?php echo Form::open(['route' => 'posts.store', 'files'=> true]); ?>

							<?php echo $__env->make('admin.posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/posts/create.blade.php ENDPATH**/ ?>