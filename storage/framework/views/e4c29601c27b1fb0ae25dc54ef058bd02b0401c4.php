<?php $__env->startSection('contentAdmin'); ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h4 class="text-center">Asignar Rol</h4>
            <div class="card">
                <div class="card-body">      
                    <?php echo Form::model($user, ['route' => ['users.update', $user->id],
                    'method' => 'PUT']); ?>


                        <?php echo $__env->make('admin.directory.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                    <?php echo Form::close(); ?>

                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/directory/edit.blade.php ENDPATH**/ ?>