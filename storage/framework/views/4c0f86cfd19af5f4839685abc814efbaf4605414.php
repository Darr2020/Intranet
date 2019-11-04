

<?php $__env->startSection('contentAdmin'); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">Eventos</h3>
				<hr>
				<div class="card">					
					<div id="pieChartEvents"></div>
					<div class="card-footer text-center">
						Un total de <strong class="text-info"><?php echo e($TEvent); ?></strong> Eventos 
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="text-center">Noticias</h3>
				<hr>
				<div class="card">
					<div id="pieChartPosts"></div>
					<div class="card-footer text-center">
						Un total de <strong class="text-info"><?php echo e($TPost); ?></strong> Noticias 
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<hr>
				<h3 class="text-center">Servicios</h3>
				<hr>
				<div class="card">
					<div id="pieChartServices"></div>	
					<div class="card-footer text-center">
						Un total de <strong class="text-info"><?php echo e($Tservice); ?></strong> Servicios 
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		new Morris.Donut({
			element: 'pieChartEvents',
			data: [ 
				{label: "Eventos publicados", value:" <?php echo e($eventsP); ?> "},
				{label: "Eventos como borrador", value:" <?php echo e($eventsD); ?> "},
							  
			],			
    	});
		new Morris.Donut({
			element: 'pieChartPosts',
			data: [ 
				{label: "Noticias publicadas", value:" <?php echo e($postsP); ?> "},	
				{label: "Noticias como borrador", value:" <?php echo e($postsD); ?> "},		
			],
			donutColors:['red'],
		});
		
		new Morris.Donut({
			element: 'pieChartServices',
			data: [ 
				{label: "Servicios activos", value:" <?php echo e($servicesA); ?> "},	
				{label: "Servicios inactivos", value:" <?php echo e($servicesD); ?> "},		
			],
			donutColors:['red'],
    	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/charts/pie.blade.php ENDPATH**/ ?>