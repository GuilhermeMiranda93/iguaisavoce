<?php $__env->startSection('content'); ?>
<div id="conteudo" class="conteudo col-md-8 row ">


	<div id="loja" class="row img-max-x">

		<?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="container mb-5">

			<div class="col-12 row">
				<div class="col-12 col-sm-6 col-md-4 ">
					<img class="img-fluid" src="<?php echo e(URL::asset($item->imagem)); ?>"/>
				</div>
				<div class="col-12 col-sm-6 col-md-8 ">
					<h2><?php echo e($item->nome); ?></h2>
					<p class="mb-0"><small><?php echo e($item->autor); ?></small></p>
					<p class="price">R$<big><?php echo e($item->valor); ?></big></p>
					<a href="<?php echo e(url('/addprodutocarrinho/'.$item->id)); ?>" class="btn btn-primary">Adicionar ao Carrinho</a>
				</div>
			</div>

		</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<div class="col-12">
			<hr>
		</div>

		<div class="container my-5">
			<div class="outros-produtos row m-0 img-max-x">
				<h4>Outros Produtos</h4>
				<div style="background-color: gray;width: 100%;height: 2px;"></div>
				<?php $__currentLoopData = $produtoextras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="card col-12 col-md-4 p-0">
					<img class="card-img-top" src="<?php echo e(URL::asset($item->imagem)); ?>" alt="Card image cap">
					<div class="card-block my-2 text-center">
						<h4 class="card-title"><?php echo e($item->nome); ?></h4>
						<p class="card-text text-muted text-center">R$ <?php echo e($item->valor); ?></p>
						<a href="<?php echo e(url('/shopping/'.$item->id)); ?>" class="text-muted text-center">+ Detalhes</a>
					</div>
					<div class="card-footer p-0 my-2 text-center">
						<a href="<?php echo e(url('/addprodutocarrinho/'.$item->id)); ?>" class="btn btn-primary text-center">Adicionar ao Carrinho</a>
					</div>
				</div>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>

	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>