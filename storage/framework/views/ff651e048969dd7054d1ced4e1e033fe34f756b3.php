<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <form action=" <?php echo e(route('noticias')); ?> " 
                    method="GET" id="content">                    
                    <input type="text" name="title"  class="input" id="search-input">
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
                    
                </section>
            </div>   
            <div class="col-md-5">
                <div class="card sticky-tasks ml-auto" style="width: 22rem">
                    <div class="card-header top">
                        <div id="welcome" class="text-center">Hola <?php echo e(Auth::user()->name); ?></div>
                        <div class="reloj">
                            <ul class="timer text-center">
                                <li id="hours">3</li>
                                <li id="point">:</li>
                                <li id="min">04</li>
                                <li id="sec">12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href=" <?php echo e(route('tasks.index')); ?> " class="nav-link card-title text-center title-task">TAREAS</a>      
                        <?php if(empty($tasks)): ?>
                            <h5 class="text-center">
                                <a href=" <?php echo e(route('tasks.index')); ?> "><?php echo e(Auth::user()->name); ?> no tienes tareas creadas</a>
                            </h5>
                        <?php else: ?>                   
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tarea</th>
                                        <th class="text-center">completado</th>            
                                    </tr>
                                </thead> 
                                <tbody>
                                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>                              
                                            <td class="text-center">
                                                <a href="#" class="text-decoration-none"><?php echo e($task->name); ?></a>
                                            </td>
                                            <td class="text-center"> 
                                                <?php if($task->completed == TRUE): ?>
                                                    <span class="task-completed task-yes">SI</span>
                                                <?php else: ?>
                                                    <span class="task-completed task-no">NO</span>
                                                <?php endif; ?>                                                                      
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                                </tbody>
                            </table>        
                        <?php endif; ?>
                    </div>
                </div>
            </div>             
        </div>
    </div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/inicio.blade.php ENDPATH**/ ?>