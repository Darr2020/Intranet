<?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>

<?php echo csrf_field(); ?>

<div class="form-row">
	<div class="col-md-6">
		<div class="form-group">
			<?php echo e(Form::label('title', 'Titulo:')); ?>

			<?php echo e(Form::text('title', null, ['class' => 'form-control', 'id' => 'title'])); ?>

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<?php echo e(Form::label('slug', 'Url:')); ?>

			<?php echo e(Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly'])); ?>

		</div>
	</div>
</div>	
<div class="form-group">
	<?php echo e(Form::label('color', 'Color:')); ?>

	<?php echo e(Form::color('color', null, ['class' => 'form-control', 'id' => 'color'])); ?>

</div>
<div class="form-row">
	<div class="col">
		<div class="form-group">
			<?php echo e(Form::label('date_start', 'Fecha de inicio:')); ?>

			<?php echo e(Form::date('date_start', null, ['class' => 'form-control date'])); ?>

		</div>
	</div>
	<div class="col">
		<div class="form-group">
			<?php echo e(Form::label('date_end', 'Fecha de fin:')); ?>

			<?php echo e(Form::date('date_end', null, ['class' => 'form-control date'])); ?>

		</div>
	</div>
</div>

<div class="form-group">
	<?php echo e(Form::label('slug', 'Estado:')); ?>

	<label>
		<?php echo e(Form::radio('state', 'PUBLISHED')); ?> Publicado |
	</label>
	<label>
		<?php echo e(Form::radio('state', 'DRAFT')); ?> Borrador
	</label>
</div>

<div class="form-group">
    <?php echo e(Form::label('description', 'Descripción:')); ?>

    <?php echo e(Form::textarea('description', null, ['class' => 'form-control'])); ?>

</div>

<div class="form-group">
	<?php echo e(Form::submit('Guardar evento', ['class' => 'btn btn-primary btn-lg btn-block'])); ?>

</div>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>" ></script>
	<script>
		$(document).ready(function(){
        	$("#title").keyup(function(){
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

		CKEDITOR.config.heigth = 500;
		CKEDITOR.config.width = 'auto';

		CKEDITOR.replace('description');
	</script>
<?php $__env->stopSection(); ?>



<?php /**PATH /var/www/html/sistemas/intranet2/resources/views/admin/events/partials/form.blade.php ENDPATH**/ ?>