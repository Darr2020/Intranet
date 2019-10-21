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
	<?php echo e(Form::submit('Guardar etiqueta', ['class' => 'btn btn-color btn-lg btn-block'])); ?>

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
<?php $__env->stopSection(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/tags/partials/form.blade.php ENDPATH**/ ?>