<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h2>Directorio</h2> 
            </div>
            <div class="col-md-4 offset-md-2">
                <form action=" <?php echo e(route('users.index')); ?> " method="GET" id="content2">
                    <input type="text" name="name" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-11">
               <?php echo $__env->make('partials.users.directory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sistemas/intranet2/resources/views/users/directory.blade.php ENDPATH**/ ?>