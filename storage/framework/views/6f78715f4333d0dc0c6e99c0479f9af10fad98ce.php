    

<?php $__env->startSection('contentAdmin'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h2 class="text-center">Editar Rol</h2> 
            <hr>
            <div class="card">              
                <div class="card-body">                    
                    <?php echo Form::model($role, ['route' => ['roles.update', $role->id],'method' => 'PUT']); ?>

                        <?php echo $__env->make('admin.roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                        
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/edit.blade.php ENDPATH**/ ?>