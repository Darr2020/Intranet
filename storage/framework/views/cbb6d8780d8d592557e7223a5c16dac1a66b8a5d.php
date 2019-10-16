<?php $__env->startSection('contentAdmin'); ?>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Extensión</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <div class="card-body">
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                              
                                <td class="text-center">
                                    <a href="<?php echo e(route('users.edit', $user->id)); ?>"
                                        class="text-decoration-none">
                                        <?php echo e($user->name); ?>

                                    </a>
                                </td>
                                <td class="text-center"> <?php echo e($user->last_name); ?> </td>
                                <td class="text-center"> <?php echo e($user->extension); ?> </td>
                                <td class="text-center"> <?php echo e($user->email); ?>     </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                    </tbody>
                </div>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/roles/listar.blade.php ENDPATH**/ ?>