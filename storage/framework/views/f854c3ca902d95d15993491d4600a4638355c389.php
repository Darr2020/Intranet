

<?php $__env->startSection('contentAdmin'); ?>
    <form action=" <?php echo e(route('noticias')); ?> " 
        method="GET" id="content">                    
        <input type="text" name="title"  class="input" id="search-input">
        <button type="reset" class="search" id="search-btn"></button>
    </form> 
    <div class="col-md-11">
        <?php echo $__env->make('partials.users.directory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/listar.blade.php ENDPATH**/ ?>