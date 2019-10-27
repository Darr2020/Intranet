<div class="form-row">
	<div class="col">
		<div class="form-group">
			<?php echo e(Form::label('name', 'Nombre:')); ?>

			<?php echo e(Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])); ?>

		</div>
	</div>
	<div class="col">
		<div class="form-group">
			<?php echo e(Form::label('slug', 'URL:')); ?>

			<?php echo e(Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly'])); ?>

		</div>
	</div>
</div>
<div class="form-group">
	<?php echo e(Form::label('description', 'Descripción:')); ?>

	<?php echo e(Form::textarea('description', null, ['class' => 'form-control', 'style' => 'height:100px;'])); ?>

</div>
<hr>
<h4>Permiso especial</h4>
<div class="form-group">
 	<?php echo e(Form::radio('special', 'all-access')); ?> Acceso total
</div>
<hr>
<h4 class="text-center">Lista de permisos</h4>
<div class="form-group">
	<ul class="list-group">
		<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <li class="list-group-item">
	        <label>
	        	<?php echo e(Form::checkbox('permissions[]', $permission->id, null)); ?>

	        	<?php echo e($permission->name); ?>

	        	<em>(<?php echo e($permission->description); ?>)</em>
	        </label>
	    </li>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<div class="form-group">
	<?php echo e(Form::submit('Guardar rol', ['class' => 'btn btn-primary btn-lg btn-block'])); ?>

</div>

<?php $__env->startSection('scripts'); ?>
	<script>
		$(document).ready(function(){
        	$("#name").keyup(function(){
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
		});

		function string_to_slug (str) {
	        str = str.replace(/^\s+|\s+$/g, '');
	        str = str.toLowerCase();

	        //quita acentos, cambia la ñ por n, etc
	        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
	        var to   = "aaaaeeeeiiiioooouuuunc------";

	        for (var i=0, l=from.length ; i<l ; i++) {
	            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	        }

	        str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                .replace(/\s+/g, '-') // reemplaza los espacios por -
                .replace(/-+/g, '-'); // quita las plecas

           return $("#slug").val(str);
		}
	</script>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/roles/partials/form.blade.php ENDPATH**/ ?>