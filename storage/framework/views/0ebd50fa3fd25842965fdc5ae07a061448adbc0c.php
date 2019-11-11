<?php $__env->startSection('contentAdmin'); ?>

	<div class="container">
		<h2 class="text-center" style="color: #000">Vista previa de las Noticias</h2>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="card post">
					<?php if($post->image): ?>
						<img src="<?php echo e($post->image); ?>" class="card-img-top img-responsive">
					<?php endif; ?>
					<div class="card-body">
						<div class="title">
							<a href="<?php echo e(route('noticia', $post->slug)); ?>"><?php echo e($post->title); ?></a>
						</div>
						<div class="resumen">
							<p><?php echo e($post->summary); ?></p>
						</div>
						<div class="continue">
							<a href="<?php echo e(route('noticia', $post->slug)); ?>">leer más &rarr;</a>
						</div>
					</div>
					<div class="card-footer">
						<small class="float-right"> 
							publicado <?php echo e(\Carbon\Carbon::parse($post->date_published  )->format('d/m/Y')); ?>  
						</small>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="text-center"><?php echo e($post->title); ?></h2>
				<hr>
				<?php if($post->image): ?>
					<img src="<?php echo e($post->image); ?>" class="img-fluid">
				<?php endif; ?>
				
				<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(route('etiqueta', $tag->slug)); ?>" 
						class="text-center badge badge-primary">
						<?php echo e($tag->name); ?>

					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<div class="jumbotron">
					<p class="text-center"><?php echo e($post->summary); ?></p>
				</div>	           
				<div class="card-body">		                
					<div class="text-center" style="font-size: 22px">
						<p><?php echo $post->description; ?></p>
					</div>          		            
				</div>	
			</div>
		</div>
	</div>


	<style>
	.post{
		box-shadow: 0px 4px 8px 0px rgba(23, 23, 23, 0.2);
		border-radius: 8px;
		transition: 0.4s;
	}
	.post:hover{ transform: rotate(-5deg);}
	.card .card-img-top{ max-width: 100%; }		
	
	.card .card-img-top:hover{
		opacity: 0.8;
		cursor: pointer;
	}
	
	.card-body .title a {
		text-decoration: none;
		color: #232323;
		font-size: 28px;
		font-family: 'nunito';
		font-weight: bold;
	}
	
	.card-body .title a:hover { color: dodgerblue; }
	
	.card-body .resumen p {
		color: #555;
		margin-top: 20px;
		font-size: 17px;
		overflow-wrap: break-word;
		text-align: justify;
		max-width: 100ch;
	}
	
	.card-body .continue a {
		text-decoration: none;
		color: dodgerblue;
		font-size: 15px;
	}
	.card-body .continue a:hover {
		text-decoration: underline;
	}
	</style>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/posts/show.blade.php ENDPATH**/ ?>