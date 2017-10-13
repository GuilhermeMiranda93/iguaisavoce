<?php $__env->startSection('content'); ?>
<div id="conteudo" class="conteudo col-md-8 row ">


	<div class="sobre img-max-x">

		<?php $__currentLoopData = $texto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sobre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row mb-3">
			<div class="col-12">
				<h4 class="relacionamentos"><?php echo e($sobre->titulo); ?></h4>
				<div style="background-color: #C95959;width: 100%;height: 6px;"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-justify">
				<?php echo $sobre->texto; ?>

			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>