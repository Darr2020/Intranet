

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4">
                <h2>Directorio</h2> 
            </div>
            <div class="col-4">
                <form action=" <?php echo e(route('users.index')); ?> " method="GET" id="content2">
                    <input type="text" name="name" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido</th>
                            <th class="text-center">Oficina</th>
                            <th class="text-center">Extensión</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Ultima conexión</th>
                        </tr>
                    </thead>
                    <div class="card-body">
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>                              
                                    <td class="text-center">
                                        <a href="<?php echo e(route('users.show', $user->slug)); ?>"
                                            class="text-decoration-none">
                                            <?php echo e($user->name); ?>

                                        </a>
                                    </td>
                                    <td class="text-center"> <?php echo e($user->last_name); ?> </td>
                                    <td class="text-center"> <?php echo e($user->office); ?> </td>
                                    <td class="text-center"> <?php echo e($user->extension); ?> </td>
                                    <td class="text-center"> <?php echo e($user->email); ?>     </td>
                                    <td class="text-center"> <?php echo e(date('d/m/Y', strtotime($user->last_login))); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/users/directory.blade.php ENDPATH**/ ?>