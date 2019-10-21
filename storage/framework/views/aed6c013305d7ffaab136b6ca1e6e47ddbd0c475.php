

<?php $__env->startSection('contentAdmin'); ?>
	<div class="container">
		<div class="row">
			<?php if(count($errors)): ?>
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 offset-md-2">
	                        <div class="alert alert-danger">
	                            <ul>
	                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <li><?php echo e($error); ?></li>
	                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
			<?php endif; ?>
			
			<div class="col-md-10 offset-md-1">
				<h4 class="text-center">Listado de noticias</h4>
				<hr>
				<br>
				<small><?php echo e($posts->total()); ?> Noticias | página <?php echo e($posts->currentPage()); ?> de <?php echo e($posts->lastPage()); ?> </small>
				<a href="<?php echo e(route('posts.create')); ?>"
					class="float-right"
					role="button" aria-pressed="true"><img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px;" title="Crear Noticia">
				</a>
		 	
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="10px">Nro</th>
							<th>Titulo</th>
							<th>Resumen</th>
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td ><?php echo e($post->id); ?></td>
								<td><?php echo e($post->title); ?></td>
								<td><?php echo e($post->summary); ?></td>
								<td><?php echo e($post->state); ?></td>

								<td>
									<a href="<?php echo e(route('posts.show', $post->id)); ?>"
									   	role="button">
									   	 <img src="<?php echo e(asset('icons/ver.svg')); ?>" title="Ver noticia">
									</a>
								</td>
								<td>
									<a href="<?php echo e(route('posts.edit', $post->id)); ?>"
									   role="button">
									   <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar noticia">
									</a>
								</td>
								
								<td width="10px">
									<?php echo Form::open([
										'route' => ['posts.destroy', $post->id],
										'method' => 'DELETE']); ?>

										<button style="background: transparent; border: none;">
											<img src=" <?php echo e(asset('icons/delete.svg')); ?>" title="Eliminar noticia">
										</button>
									<?php echo Form::close(); ?>

								</td>												
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				<?php echo $posts->render(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>