<?php $__env->startSection('content'); ?>
<div id="conteudo" class="conteudo painel col-md-10">

	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8">
				<h3>Editar Assunto</h3>
				<form enctype="multipart/form-data" action="/painel/assunto/sav" method="POST">
				<?php echo e(csrf_field()); ?>

				<?php $__currentLoopData = $texto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $txt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="form-group">
						<label for="titulo_input">Título</label>
						<input name="titulo" type="text" class="form-control" value="<?php echo e($txt->titulo); ?>" id="titulo_input">
					</div>
					<div class="form-group">
						<label for="autor_input"><?php echo e($txt->autor); ?></label>
						<input name="autor" type="text" class="form-control" id="autor_input" value="Guilherme" >
					</div>
					<div class="form-group">
						<label for="chamada_input"><?php echo e($txt->chamada); ?></label>
						<textarea name="chamada" class="form-control" id="chamada_input" rows="3"><?php echo e($txt->chamada); ?></textarea>
					</div>
					<div class="form-group">
						<label for="imagem_input">Carregar Imagem</label>
						<input name="arquivo" accept="image/*" type="file" class="form-control-file" id="imagem_input" aria-describedby="fileHelp">
						<img class="" id="file-upload" src="../img/<?php echo e($txt->arquivo); ?>" />
					</div>

					<div class="form-group">
						<label for="imagem_input">Categoria</label>
						<select selected="<?php echo e($txt->categoria); ?>" name="categoria" class="form-control">
							<option value="1">Comportamento</option>
							<option value="2">Cotidiano</option>
							<option value="3">Relacionamento</option>
							<option value="4">Beleza e Saúde</option>
						</select>
					</div>

					<div class="form-group">
						<label for="froala-editor">Texto</label>
						<textarea class="form-control" id="texto_input" rows="3"><?php echo $txt->texto; ?></textarea>
					</div>

					<textarea name="texto" hidden id="preview"></textarea>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<button id="new" type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Novo</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Salvar</button>

				</form>
			</div>
		</div>



		<div class="row salvos-header">

			<div class="col-md-1 text-center">
				<i class="fa fa-navicon fa-2x" aria-hidden="true"></i>
			</div>
			<div class="col-md-8">
				<h4>Título</h4>
			</div>
			<div class="col-md-3 text-center">
				<h4>Opções</h4>
			</div>
		</div>

		<?php $__currentLoopData = $texto_salvos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $txt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row salvos">
			<div class="col-md-1 text-center">
				<p>1</p>
			</div>
			<div class="col-md-8">
				<p><?php echo e($txt->titulo); ?></p>
			</div>
			<div class="col-md-3 text-center">
				<?php if($txt->visivel == 1): ?>
				<a href="<?php echo e(url('/vis/'.$txt->id)); ?>" title="Visível"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
				<?php else: ?>
				<a href="<?php echo e(url('/vis/'.$txt->id)); ?>" title="Invisível"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></a>
				<?php endif; ?>
				<a href="<?php echo e(url('/del/'.$txt->id)); ?>" title="Excluir"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
				<a href="<?php echo e(url('/edit/'.$txt->id)); ?>" title="Editar"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel/painel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>