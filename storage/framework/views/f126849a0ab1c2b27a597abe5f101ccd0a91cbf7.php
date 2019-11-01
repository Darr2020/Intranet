<?php $__env->startSection('contentAdmin'); ?>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-10 mt-5">
				<h3 class="text-center">Listado de eventos</h3>
				<hr>
				<br>
				<strong><?php echo e($events->total()); ?> Roles | página <?php echo e($events->currentPage()); ?> de <?php echo e($events->lastPage()); ?> </strong>
				<a href="<?php echo e(route('events.create')); ?>" class="float-right ml-5">
					<img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px;" title="Crear Rol">
				</a>
				
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Titulo</th>
							<th class="text-center">Inicia</th>
							<th class="text-center">Finaliza</th>							
							<th class="text-center">Estado</th>
							<th colspan="2">Gestón</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="text-center"><?php echo e($event->id); ?></td>
								<td class="text-center"><?php echo e($event->title); ?></td>
								<td class="text-center"><?php echo e(date("d/m/Y", strtotime($event->date_start))); ?></td>
								<td class="text-center"><?php echo e(date("d/m/Y", strtotime($event->date_end))); ?></td>
								<td class="text-center">
									<?php if($event->state == 'PUBLISHED'): ?>
										<strong class="text-success">Evento publicado</strong>
									<?php else: ?>
										<strong class="text-danger">Guardada como borrador</strong>
									<?php endif; ?>
								</td>							
								<td width="10px">
									<a href="<?php echo e(route('events.edit', $event->id)); ?>"
									   role="button">
									   <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar evento">
									</a>
								</td>								
								<td width="10px">
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
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/events/index.blade.php ENDPATH**/ ?>