<?php $__env->startSection('contentAdmin'); ?>
	<div class="container">
		<div class="row">
			
			<div class="col-md-10 offset-md-1">
				<h4 class="text-center">Listado de noticias</h4>
				<hr>
				<br>				
				<strong><?php echo e($posts->total()); ?> Noticias | página <?php echo e($posts->currentPage()); ?> de <?php echo e($posts->lastPage()); ?> </strong>
				<a href="<?php echo e(route('posts.create')); ?>" class="float-right">
					<img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px;" title="Crear Noticia">
				</a>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" width="10px">Nro</th>
							<th class="text-center">Titulo</th>
							<th class="text-center">Resumen</th>
							<th class="text-center">Estado</th>
							<th class="text-center" colspan="3">Gestión</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e($loop->iteration); ?></td>
								<td class="text-center"><?php echo e($post->title); ?></td>
								<td class="text-center"><?php echo e($post->summary); ?></td>
								<td class="text-center">
									<?php if($post->state == 'PUBLISHED'): ?>
										<strong class="text-success">Noticia publicada</strong>
									<?php else: ?>
										<strong class="text-danger">Guardada como borrador</strong>
									<?php endif; ?>
									
								</td>

								<td class="text-center" width="10px">
									<a href="<?php echo e(route('posts.show', $post->id)); ?>"
									   	role="button">
									   	 <img src="<?php echo e(asset('icons/ver.svg')); ?>" title="Ver noticia">
									</a>
								</td>
								<td class="text-center" width="10px">
									<a href="<?php echo e(route('posts.edit', $post->id)); ?>"
									   role="button">
									   <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar noticia">
									</a>
								</td>
								
								<td class="text-center" width="10px">
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