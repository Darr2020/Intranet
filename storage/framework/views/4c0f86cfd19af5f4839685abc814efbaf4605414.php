<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<h3 class="text-center">Publicaciones</h3>
					<div id="pieChartEvents"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<h3 class="text-center">Borradores</h3>
					<div id="pieChartPosts"></div>
				</div>
			</div>
		</div>
	</div>

	<script>
		new Morris.Donut({
			element: 'pieChartEvents',
			data: [ 
				{label: "Eventos", value:" <?php echo e($eventsP); ?> "},
				{label: "Noticias", value:" <?php echo e($postsP); ?> "},				  
			],
			
    	});

		new Morris.Donut({
			element: 'pieChartPosts',
			data: [ 
				{label: "Eventos", value:" <?php echo e($eventsD); ?> "},
				{label: "Noticias", value:" <?php echo e($postsD); ?> "},		
			],
			donutColors:['black'],
    	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/charts/pie.blade.php ENDPATH**/ ?>