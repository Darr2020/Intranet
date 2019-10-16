<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Noticias</h3>
			<div id="Area"></div>
		</div>
	</div>

	<script>

		new Morris.Area({
			element: 'Area',
			data: [
				<?php $__currentLoopData = $postsYear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					{ 
						year:"<?php echo e($post->year); ?>", 
						noticias:"<?php echo e($post->total); ?>"  
					},
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
			],
			xkey: 'year',
			ykeys:  ['noticias'],
			labels: ['noticias'],
			fillOpacity: 0.6,
			hideHover: 'auto',
			behaveLikeLine: true,
			lineColors:['red'],
			pointFillColors:['white'],
			pointStrokeColors: ['black'],	
    	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/charts/area.blade.php ENDPATH**/ ?>