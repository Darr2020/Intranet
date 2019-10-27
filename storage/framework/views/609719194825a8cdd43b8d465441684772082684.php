<?php $__env->startSection('contentAdmin'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center">Listado de Servicios</h3>
            <hr>
            <br>
           
            <a href="<?php echo e(route('services.create')); ?>" class="float-right">
                <img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px;" title="Agregar servicio">
            </a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center" colspan="1">Gestión</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($service->id); ?></td>
                        <td class="text-center"><?php echo e($service->name); ?></td>
                        <td class="text-center"><?php echo e($service->description); ?></td>
                        <td class="text-center"><?php echo e($service->route); ?></td>
                        <td class="text-center">
                            <?php if($service->state == 'ACTIVE'): ?>
                                <p class="text-success">Servicio inactivo</p>
                            <?php else: ?>
                                <p class="text-danger">Servicio inactivo</p>
                            <?php endif; ?>
                        </td>                        
                        <?php if (\Shinobi::can('services.edit')): ?>
                            <td width="10px" class="text-center">
                                <a href="<?php echo e(route('services.edit', $service->id)); ?>" 
                                    style="width: 30px;">
                                    <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar servicio">
                                </a>
                            </td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/services/index.blade.php ENDPATH**/ ?>