<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-7 ">
		
		        <h3 class="title text-center">
		        	<?php echo e($post->title); ?>

		        </h3>
	        	

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
					<div class="container">
				    	<p class="text-center"><?php echo e($post->summary); ?></p>
				  	</div>
				</div>
	           
	            <div class="fm-card-content">		                
	                <div class="resumen">
	                    <p><?php echo $post->content; ?></p>
	                </div>          		            
	            </div>
		            
		    </div>
		</div>

		
	</div>
<?php $__env->stopSection(); ?>     

           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/users/post.blade.php ENDPATH**/ ?>