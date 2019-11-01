<?php $__env->startSection('contentAdmin'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-7 offset-md-2">
				<div class="card">
					<div class="card-header">
						Eitquetas

						<a href="<?php echo e(route('tags.create')); ?>"
							class="btn btn-primary  float-right"
							role="button" aria-pressed="true">Crear</a>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">Nro</th>
									<th>Nombre</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($tag->id); ?></td>
										<td><?php echo e($tag->name); ?></td>
										<td width="10px">
											<a href="<?php echo e(route('tags.edit', $tag->id)); ?>">
												<img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar etiqueta">
											</a>
										</td>
										<td width="10px">
											<?php echo Form::open([
												'route' => ['tags.destroy', $tag->id],
												'method' => 'DELETE']); ?>

												<button class="btn btn-danger">Eliminar</button>
											<?php echo Form::close(); ?>

										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/tags/index.blade.php ENDPATH**/ ?>