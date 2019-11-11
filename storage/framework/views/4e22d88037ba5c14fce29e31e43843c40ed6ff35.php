

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row text-center">
			<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="<?php echo e(asset('icons/favorite.svg')); ?>">
						</div>	
						<h3><?php echo e($service->name); ?></h3>
						<p><?php echo e($service->description); ?></p>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/users/services.blade.php ENDPATH**/ ?>