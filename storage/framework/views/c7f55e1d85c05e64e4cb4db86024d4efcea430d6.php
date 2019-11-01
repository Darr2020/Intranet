

<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">		
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
				
				<p id="likeCount"> <?php echo e($post->likesCount); ?> </p>
				
				<p class="like" id="like"><img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> ">Me gusta</p>
				<p class="like" id="unLike">  </p>   

	            <div class="card-body">		                
	                <div class="text-center" style="font-size: 22px">
	                    <p><?php echo $post->description; ?></p>
	                </div>          		            
	            </div>		            
		    </div>
		</div>	
	</div>

	<script type="text/javascript">

		<?php if($post->liked): ?>
			$('#like').hide();
			$('#unLike').show();
		<?php else: ?>
			$('#like').show();
			$('#unLike').hide();
		<?php endif; ?>

		$('.like').on('click', function(){
			const user = <?php echo e(Auth::user()->id); ?>


			$.ajax({
				type: 'get',
				url: ` <?php echo e(route('toggleLike', $post->slug)); ?> `,
				data: user, 
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if (data.like.isLiked) {
						$('#like').hide();
						$('#unLike').show();
						$('#likeCount').html('<img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> ">' + data.like.likes);
					}else{
						$('#like').show();
						$('#unLike').hide();
						$('#likeCount').html('<img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> ">' + data.like.likes)

					}
				}
			});
		});
	</script>
<?php $__env->stopSection(); ?>     

           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/users/post.blade.php ENDPATH**/ ?>