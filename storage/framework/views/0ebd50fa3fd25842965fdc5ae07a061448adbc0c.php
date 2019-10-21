

<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Noticia</h3>
					</div>
					<div class="card-body">
						<p><strong>Titulo: </strong>    <?php echo e($post->title); ?></p>
						<p><strong>Slug: </strong>	    <?php echo e($post->slug); ?></p>
						<p><strong>Contenido: </strong> <?php echo $post->content; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/posts/show.blade.php ENDPATH**/ ?>