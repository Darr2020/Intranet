<div class="form-group">
	<?php echo e(Form::label('name', 'Nombre:')); ?>

	<?php echo e(Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'readonly'])); ?>

</div>
<hr>
<h5>Lista de roles</h5>
<div class="form-group">
	<ul class="list-group">
		<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <li class="list-group-item">
	        <label>
	        	<?php echo e(Form::checkbox('roles[]', $role->id, null)); ?>

	        	<?php echo e($role->name); ?>

	        	<em>(<?php echo e($role->description); ?>)</em>
	        </label>
	    </li>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<div class="form-group">
	<?php echo e(Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div><?php /**PATH /var/www/html/intranet2/resources/views/admin/directory/partials/form.blade.php ENDPATH**/ ?>