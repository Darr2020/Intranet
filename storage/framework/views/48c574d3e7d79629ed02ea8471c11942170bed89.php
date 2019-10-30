<strong><?php echo e($users->total()); ?> Usuarios | Página <?php echo e($users->currentPage()); ?> de <?php echo e($users->lastPage()); ?> </strong>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Oficina</th>
            <th class="text-center">Extensión</th>
            <th class="text-center">Email</th>
            <?php if(Request::path() == 'directorio'): ?>
                <th class="text-center">Ultima conexión</th>
            <?php else: ?>
                    
            <?php endif; ?>            
        </tr>
    </thead>        
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
                <?php if(Request::path() == 'directorio'): ?>
                    <td class="text-center"> <?php echo e(date('d/m/Y', strtotime($user->last_login))); ?></td>
                <?php else: ?>
                    
                <?php endif; ?>                
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
    </tbody>        
</table><?php /**PATH /var/www/html/intranet2/resources/views/partials/users/directory.blade.php ENDPATH**/ ?>