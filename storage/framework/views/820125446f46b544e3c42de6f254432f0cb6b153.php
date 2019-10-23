

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

			<div class="col-md-9 offset-md-2">
				<a href="<?php echo e(route('events.create')); ?>"
					class="float-right"
					role="button" aria-pressed="true"><img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px" title="Crear evento">
				</a>
				

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nro</th>
							<th>Titulo</th>
							<th>Inicia</th>
							<th>Finaliza</th>							
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($event->id); ?></td>
								<td><?php echo e($event->title); ?></td>
								<td><?php echo e($event->date_start); ?></td>
								<td><?php echo e($event->date_end); ?></td>
								<td><?php echo e($event->state); ?></td>							
								<td>
									<a href="<?php echo e(route('events.edit', $event->id)); ?>"
									   role="button">
									   <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar evento">
									</a>
								</td>
								
									<td>
										<?php echo Form::open([
											'route' => ['events.destroy', $event->id],
											'method' => 'DELETE']); ?>

											<button style="background: transparent; border: none;">
												<img src=" <?php echo e(asset('icons/delete.svg')); ?>" title="Eliminar evento">
											</button>
										<?php echo Form::close(); ?>

									</td>
													
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/events/index.blade.php ENDPATH**/ ?>