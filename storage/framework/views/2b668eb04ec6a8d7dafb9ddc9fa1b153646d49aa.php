<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h2 class="text-center">Editar Noticias</h2>
				<hr>
				<div class="card">
					<div class="card-body">
						<?php echo Form::model($post, ['route' => ['posts.update', $post->id],
						 'method' => 'PUT', 'files' => true]); ?>


                        	 <?php echo $__env->make('admin.posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    	<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/posts/edit.blade.php ENDPATH**/ ?>