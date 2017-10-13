<?php $__env->startSection('content'); ?>

<div id="conteudo" class="conteudo col-md-8 row ">



	<!-- Aqui começa os blogs -->

	<div class="col-xs-12 col-xl-3 nested-items">

		<?php $__currentLoopData = $texto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<a href="<?php echo e(URL::asset('assuntos/post/'.$texto_home->id)); ?>" class="blog_preview mb-4">
			<div class="card item-1">
				<div class="div-img">
					<img class="card-img-top img-max-x" src="img/<?php echo e($texto_home->arquivo); ?>" alt="Card image cap"/>
				</div>
				<div class="card-block">
					<h4 class="card-title cotidiano"><?php echo e($texto_home->titulo); ?></h4>
					<p class="card-text"><?php echo e($texto_home->chamada); ?></p>
				</div>
			</div>
		</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>



	<div class="col-xs-12 col-xl-9">
		<?php $__currentLoopData = $texto2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="<?php echo e(URL::asset('assuntos/post/'.$texto_home->id)); ?>" class="blog_preview">
			<div class="card item-3">
				<div class="div-img"><img class="card-img-top img-max-x" src="img/<?php echo e($texto_home->arquivo); ?>" alt="Card image cap"/></div>
				<div class="card-block">
					<h4 class="card-title comportamento"><?php echo e($texto_home->titulo); ?></h4>
					<p class="card-text"><?php echo e($texto_home->chamada); ?></p>
				</div>
			</div>
		</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

	<!-- Aqui termina os blogs -->






	<div class="row outros_assuntos">


		<div class="col-md-12">

			<h4 class="comportamento">Comportamento</h4>
			<div style="background-color: #8e44ad;width: 100%;height: 6px;"></div>
			<?php $__currentLoopData = $texto_comportamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
				<div class="col-md-3">
					<img src="img/<?php echo e($texto_home->arquivo); ?>"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="comportamento"><?php echo e($texto_home->titulo); ?></h5>
						<p><?php echo e($texto_home->chamada); ?></p>
						<p><small><?php echo e($texto_home->autor); ?></small></p>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


			<h4 class="cotidiano">Cotidiano</h4>
			<div style="background-color: #15A2FF;width: 100%;height: 6px;"></div>
			<?php $__currentLoopData = $texto_cotidiano; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
				<div class="col-md-3">
					<img src="img/<?php echo e($texto_home->arquivo); ?>"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="cotidiano"><?php echo e($texto_home->titulo); ?></h5>
						<p><?php echo e($texto_home->chamada); ?></p>
						<p><small><?php echo e($texto_home->autor); ?></small></p>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<h4 class="relacionamentos">Relacionamento</h4>
			<div style="background-color: #EB5055;width: 100%;height: 6px;"></div>
			<?php $__currentLoopData = $texto_relacionamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
				<div class="col-md-3">
					<img src="img/<?php echo e($texto_home->arquivo); ?>"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="relacionamentos"><?php echo e($texto_home->titulo); ?></h5>
						<p><?php echo e($texto_home->chamada); ?></p>
						<p><small><?php echo e($texto_home->autor); ?></small></p>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<h4 class="beleza">Beleza e Saúde</h4>
			<div style="background-color: #26BB91;width: 100%;height: 6px;"></div>
			<?php $__currentLoopData = $texto_beleza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $texto_home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
				<div class="col-md-3">
					<img src="img/<?php echo e($texto_home->arquivo); ?>"/>
				</div>
				<div class="col-md-9 blog_resumo">
					<a href=""><h5 class="beleza"><?php echo e($texto_home->titulo); ?></h5>
						<p><?php echo e($texto_home->chamada); ?></p>
						<p><small><?php echo e($texto_home->autor); ?></small></p>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



		</div>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>