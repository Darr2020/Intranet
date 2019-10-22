<?php $__env->startSection('contentAdmin'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h4>Todos los roles</h4>                
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th colspan="2">
                                    <?php if (\Shinobi::can('roles.create')): ?>
                                        <a href="<?php echo e(route('roles.create')); ?>" 
                                            class="float-right">
                                            <img src="<?php echo e(asset('icons/create.svg')); ?>" style="width: 30px" title="Crear rol">
                                        </a>
                                     <?php endif; ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td><?php echo e($role->description); ?></td>
                                
                                <?php if (\Shinobi::can('roles.edit')): ?>
                                    <td width="10px">
                                        <a href="<?php echo e(route('roles.edit', $role->id)); ?>" 
                                            style="width: 30px;">
                                            <img src="<?php echo e(asset('icons/edit.svg')); ?>" title="Editar rol">
                                        </a>
                                    </td>
                                <?php endif; ?>
                                <?php if (\Shinobi::can('roles.destroy')): ?>
                                <td width="10px">
                                    <?php echo Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']); ?>

                                        <button style="background: none; border: none; width: 30px;">
                                            <img src="<?php echo e(asset('icons/delete.svg')); ?>" titlte="Eliminar rol">
                                        </button>
                                    <?php echo Form::close(); ?>

                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($roles->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/index.blade.php ENDPATH**/ ?>