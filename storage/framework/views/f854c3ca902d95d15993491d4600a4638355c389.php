

<?php $__env->startSection('contentAdmin'); ?>
    <div class="row justify-content-center">
        <form class="form-inline my-2 mb-2 my-lg-0" action=" <?php echo e(route('listar.users')); ?>" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Nombre o Oficina" name="q" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form> 
    
    <br>
    <div class="col-md-11">
        <?php echo $__env->make('partials.users.directory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/listar.blade.php ENDPATH**/ ?>