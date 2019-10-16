<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Eventos</h3>
			<div id="barChart"></div>
		</div>
	</div>

	<script>
		new Morris.Bar({
			element: 'barChart',
			data: [
				<?php $__currentLoopData = $eventsYear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					{ 
						year:"<?php echo e($events->year); ?>", 
						eventos:"<?php echo e($events->total); ?>"  
					},
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
			],
			xkey: 'year',
			ykeys:  ['eventos'],
			labels: ['eventos'],
			barColors:['#36b9cc'],
			hideHover: 'auto',
    	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/charts/bar.blade.php ENDPATH**/ ?>