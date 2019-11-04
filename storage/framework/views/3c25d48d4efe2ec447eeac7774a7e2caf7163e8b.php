

<?php $__env->startSection('contentAdmin'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center">Listado de roles</h3>
            <hr>
            <br>
            <strong><?php echo e($roles->total()); ?> Roles | página <?php echo e($roles->currentPage()); ?> de <?php echo e($roles->lastPage()); ?> </strong>
            <a href="<?php echo e(route('roles.create')); ?>" class="float-right ml-5">
                <img src=" <?php echo e(asset('icons/create.svg')); ?>" style="width: 30px;" title="Crear Rol">
            </a>
            <a href="<?php echo e(route('listar.users')); ?>" role="button" class="btn btn-outline-success float-right ">Asignar rol</a>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center" colspan="2">Gestión</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($role->id); ?></td>
                        <td class="text-center"><?php echo e($role->name); ?></td>
                        <td class="text-center"><?php echo e($role->description); ?></td>                        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/index.blade.php ENDPATH**/ ?>