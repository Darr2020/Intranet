

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="photo">
                <div class="circle text-center">
                    <img class="mt-4" src="<?php echo e(asset('icons/personProfile.svg')); ?> " width="80">
                </div>
                <a href="#" class="mt-2">Agregar una imagen</a>
            </div>
        </div>
        <div class="col-md-8"> 
            <h1 class="name-profile"><?php echo e($user->name); ?> <?php echo e($user->last_name); ?> 
                <?php if(!$alias->isEmpty()): ?> 
                    <strong><em class="text-primary text-lowercase"><?php echo e(($user->alias)); ?></em></strong>
                    <br>
                    <a class="text-lowercase" href="#">Editar alias</a>
                <?php else: ?>    
                    <a href="#">Agregar Alias</a>
                <?php endif; ?>
            </h1>   
            
            <table>
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hola</td>
                        <td>como</td>
                    </tr>
                    <tr>
                            <td>Holaaa</td>
                            <td>comooo</td>
                        </tr>
                </tbody>
            </table>
                
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/users/profile.blade.php ENDPATH**/ ?>