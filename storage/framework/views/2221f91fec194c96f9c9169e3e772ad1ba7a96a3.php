<?php $__env->startSection('contentAdmin'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Editar Servicio</h2>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <?php echo Form::model($service, ['route' => ['services.update', $service->id],
                            'method' => 'PUT']); ?>

                                <?php echo $__env->make('admin.services.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/services/edit.blade.php ENDPATH**/ ?>