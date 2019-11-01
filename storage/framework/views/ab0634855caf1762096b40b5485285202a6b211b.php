<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="sticky-services">
                <section class="section-services">
                    <h4>Servicios</h4>
                    <hr>
                    <div class="services">
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/3.png')); ?>" title="Constacia de trabajo" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/4.png')); ?>" title="Recibo de pago" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/5.png')); ?>" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/6.png')); ?>" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/7.png')); ?>" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="<?php echo e(asset('img/9.jpg')); ?>" class="img-fluid">
                        </a>
                    </div>
                    <a href="<?php echo e(route('services')); ?>" class="btn btn-color btn-block"
                        role="button" aria-pressed="true">
                        Más servicios...
                    </a>
                </section>
                </div>
            </div>
            <div class="col-md-5">
                <form action=" <?php echo e(route('noticias')); ?> " 
                    method="GET" id="content">                    
                    <input type="text" name="title" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
                <section>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card post">
                                <?php if($post->image): ?>
                                    <img src="<?php echo e($post->image); ?>" class="card-img-top img-responsive">
                                <?php endif; ?>
                            <div class="card-body">
                                <div class="title">
                                    <a href="<?php echo e(route('noticia', $post->slug)); ?>">
                                        <?php echo e($post->title); ?>

                                    </a>
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
                                    publicado <?php echo e($post->created_at->diffForHumans()); ?> 
                                </small>
                            </div>
                        </div>
                        <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="float-right">
                        <?php echo $posts->render(); ?>

                    </div>
                </section>
            </div>
            <div class="col-md-4 ">
                <card-tasks-component></card-tasks-component>
            </div>
            
        </div>
    </div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/1/intranet2/resources/views/inicio.blade.php ENDPATH**/ ?>