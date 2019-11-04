

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="photo">
                <div class="circle text-center">
                    <img class="mt-4" src="<?php echo e(asset('icons/personProfile.svg')); ?> " width="80">
                </div>
                <a href="#" class="mt-2">Agregar una imagen</a>
            </div>
        </div>
        <div class="col-md-6"> 
            <h1 class="name-profile"><?php echo e($user->name); ?> <?php echo e($user->last_name); ?></h1>   

            <ul class="list-group list-group-flush mt-5">
                <li class="list-group-item">
                    <h5><img src=" <?php echo e(asset('icons/email.svg')); ?>"> <?php echo e($user->email); ?></h5>
                </li>
                <li class="list-group-item">
                    <h5><img src=" <?php echo e(asset('icons/phone.svg')); ?>"> <?php echo e($user->extension); ?></h5>
                </li>
            </ul>                
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/users/profile.blade.php ENDPATH**/ ?>