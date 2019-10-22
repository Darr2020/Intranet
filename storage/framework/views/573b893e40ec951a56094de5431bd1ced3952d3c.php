<?php $__env->startSection('contentAdmin'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Crear Rol</h4>  
                </div>

                <div class="card-body">                    
                    <?php echo e(Form::open(['route' => 'roles.store'])); ?>


                        <?php echo $__env->make('admin.roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>