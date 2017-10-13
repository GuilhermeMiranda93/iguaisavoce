<?php $__env->startSection('content'); ?>
<div id="conteudo" class="conteudo painel col-md-10">

	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8">
				<h3>Novo Produto</h3>
				<form enctype="multipart/form-data" action="/painel/produto/sav" method="POST">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="titulo_input">Título</label>
						<input name="nome" type="text" class="form-control" id="titulo_input">
					</div>
					<div class="form-group">
						<label for="imagem_input">Carregar Imagem</label>
						<input name="imagem" accept="image/*" type="file" class="form-control-file" id="imagem_input" aria-describedby="fileHelp">
						<img class="" id="file-upload" src="../img/sem-imagem.jpg" />
					</div> 
					<div class="form-group">
						<label for="link_input">Descrição</label>
						<textarea name="descricao" type="text" class="form-control" id="link_input"></textarea> 
					</div> 
					<div class="form-group">
						<label for="valor_input">Valor</label>
						<input name="valor" type="number" class="form-control" id="valor_input" placeholder="R$">
					</div>
					<div class="form-group">
						<label for="autor_input">Autor</label>
						<input name="autor" type="text" class="form-control" id="autor_input">
					</div>                  

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

		<?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row salvos">
			<div class="col-md-1 text-center">
				<p>1</p>
			</div>
			<div class="col-md-8">
				<p><?php echo e($item->nome); ?></p>
			</div>
			<div class="col-md-3 text-center">
				<?php if($item->visivel == 1): ?>
				<a href="<?php echo e(url('/vis/'.$item->id)); ?>" title="Visível"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
				<?php else: ?>
				<a href="<?php echo e(url('/vis/'.$item->id)); ?>" title="Invisível"><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></a>
				<?php endif; ?>
				<a href="<?php echo e(url('/del/'.$item->id)); ?>" title="Excluir"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
				<a href="<?php echo e(url('/edit/'.$item->id)); ?>" title="Editar"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel/painel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>