<?php echo e(Form::hidden('user_id', auth()->user()->id)); ?>

<?php echo csrf_field(); ?>

<div class="form-row">
	<div class="col-md-6">
		<div class="form-group">
			<h5><?php echo e(Form::label('title', 'Titulo:')); ?></h5>
			<?php echo e(Form::text('title', null, ['class' => 'form-control', 'id' => 'title'])); ?>

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<h5><?php echo e(Form::label('slug', 'URL:')); ?></h5>
			<?php echo e(Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly' ])); ?>

		</div>
	</div>
</div>
<div class="row mt-4">
	<div class="col-md-7">
		<h5>Agregar imagen:</h5>
		<div class="custom-file">
			<div class="form-group">
				<?php echo e(Form::label('image', 'Archivo...', ['class' => 'custom-file-label'])); ?>

				<?php echo e(Form::file('image', ['class' => 'custom-file-input', 'lang' => 'es'])); ?>

			</div>
		</div>
		<hr>
		<div class="form-group justify-content-center">
			<h5><?php echo e(Form::label('state', 'Guardar como:')); ?></h5>
			<label>
				<?php echo e(Form::radio('state', 'PUBLISHED')); ?> Publicado |
			</label>
			<label>
				<?php echo e(Form::radio('state', 'DRAFT')); ?> Borrador
			</label>
		</div>
		<hr>
		<div class="form-group">
			<h5><?php echo e(Form::label('summary', 'Resumen:')); ?></h5>
			<?php echo e(Form::textarea('summary', null, ['class' => 'form-control'])); ?>

		</div>
		<div class="form-group">
				<h5><?php echo e(Form::label('description', 'Descripción:')); ?></h5>
				<?php echo e(Form::textarea('description', null, ['class' => 'form-control'])); ?>

			</div>
	</div>
	<div class="col-md-5">
		<h5 class="text-center">Listado de etiquetas:</h5>
		<div class="form-group">
			<ul class="list-group">
				<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="list-group-item">
					<label>
						<?php echo e(Form::checkbox('tags[]', $tag->id, null)); ?> 
						<?php echo e($tag->name); ?> <em>(<?php echo e($tag->slug); ?>)</em>
					</label>
				</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	</div>
</div>
<div class="form-group">
	<?php echo e(Form::submit('Guardar noticias', ['class' => 'btn btn-primary btn-lg btn-block'])); ?>

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
	<?php $__env->stopSection(); ?><?php /**PATH /var/www/html/intranet2/resources/views/admin/posts/partials/form.blade.php ENDPATH**/ ?>