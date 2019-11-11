
<?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>

<?php echo csrf_field(); ?>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <h5><?php echo e(Form::label('name', 'Nombre del servicio:')); ?></h5>
            <?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <h5><?php echo e(Form::label('route', 'Dirección del servicio:')); ?></h5>
            <?php echo e(Form::text('route', null, ['class' => 'form-control'])); ?>

        </div>
    </div>
    <div class="col-md-5 offset-md-1">
        <div class="form-group">
            <h5><?php echo e(Form::label('slug', 'Estado del servicio:')); ?></h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <label><?php echo e(Form::radio('state', 'ACTIVE')); ?> <strong class="text-success">Activar servicio</strong></label>
                </li>
                <li class="list-group-item">
                    <label><?php echo e(Form::radio('state', 'DEACTIVATED')); ?> <strong class="text-danger ">Desactivar servicio</strong></label>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="form-group">
    <h5><?php echo e(Form::label('description', 'Descripción del servicio:')); ?></h5>
    <?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description'])); ?>

</div>
	
<div class="form-group">
	<?php echo e(Form::submit('Agregar servicio', ['class' => 'btn btn-primary btn-lg btn-block'])); ?>

</div>

<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>" ></script>

	<script>	
		CKEDITOR.config.heigth = 500;
		CKEDITOR.config.width = 'auto';
		CKEDITOR.replace('description');
	</script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/intranet2/resources/views/admin/services/partials/form.blade.php ENDPATH**/ ?>