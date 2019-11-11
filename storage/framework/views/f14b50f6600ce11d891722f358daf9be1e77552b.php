<?php $__env->startSection('contentAdmin'); ?>
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11 mt-4">
                    <h2 class="text-center">Auditoria</h2>
                    <h5 class="text-center">Acciones que realizan los usuarios con distintas permisologías</h5>
                    <hr>
                    <br>
                    <strong><?php echo e($trace->total()); ?> Traza | página <?php echo e($trace->currentPage()); ?> de <?php echo e($trace->lastPage()); ?> </strong>          
                                                                                                      
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">#</th>
                            <th class="text-center">Usuario</th>
                            <th class="text-center">Departamento</th>
                            <th class="text-center">Acción</th>
                            <th class="text-center">Tipo de acción</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Fecha de Acción</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $__currentLoopData = $trace; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td class="text-center"><?php echo e($user->user->name); ?> <?php echo e($user->user->last_name); ?></td>
                            <td class="text-center"><?php echo e($user->user->departament); ?></td>
                            <td class="text-center"><?php echo e($user->action); ?></td>
                            <td class="text-center">
                                <?php if($user->type_action == 'CREATE'): ?>
                                    <span class="text-success">Creación</span>
                                <?php else: ?>
                                    <span class="text-warning">Actualización</span>                                    
                                <?php endif; ?>                                
                            </td>
                            <td class="text-center"><?php echo e($user->description); ?></td>
                            <td class="text-center"><?php echo e($user->created_at->diffForHumans()); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php echo e($trace->render()); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/audit/trace.blade.php ENDPATH**/ ?>