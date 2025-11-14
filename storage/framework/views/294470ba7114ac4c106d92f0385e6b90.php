<?php $__env->startSection('title','Carros disponíveis'); ?>
<?php $__env->startSection('content'); ?>
  <h1 class="mb-4">Carros disponíveis</h1>
  <div class="row">
    <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 mb-4">
        <div class="card card-custom">
          <a href="#card<?php echo e($veiculo->id); ?>" style="text-decoration:none;color:inherit;">
            <img src="<?php echo e($veiculo->foto1); ?>" class="card-img-top" alt="foto">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($veiculo->nome_veiculo); ?></h5>
              <p class="mb-1"><strong><?php echo e($veiculo->marca); ?></strong> • <?php echo e($veiculo->modelo); ?></p>
              <p class="mb-1">Ano: <?php echo e($veiculo->ano); ?> • <?php echo e(number_format($veiculo->quilometragem,0,',','.')); ?> km</p>
              <p class="h5 text-success">R$ <?php echo e(number_format($veiculo->valor,2,',','.')); ?></p>
            </div>
          </a>
        </div>
        <div id="card<?php echo e($veiculo->id); ?>" class="card-expanded p-3">
          <div class="row">
            <div class="col-md-8">
              <img src="<?php echo e($veiculo->foto1); ?>" style="width:100%; height:360px; object-fit:cover; border-radius:8px;">
              <div class="mt-3">
                <h3><?php echo e($veiculo->nome_veiculo); ?></h3>
                <p><strong><?php echo e($veiculo->marca); ?> - <?php echo e($veiculo->modelo); ?></strong></p>
                <p>Ano: <?php echo e($veiculo->ano); ?> • Quilometragem: <?php echo e(number_format($veiculo->quilometragem,0,',','.')); ?> km</p>
                <p class="h4 text-success">R$ <?php echo e(number_format($veiculo->valor,2,',','.')); ?></p>
                <hr>
                <p><?php echo e($veiculo->descricao); ?></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-custom p-3" style="background:#f8f9fa;color:#111;">
                <h5>Contato do proprietário</h5>
                <p><strong>Nome:</strong> <?php echo e($veiculo->proprietario ?? '---'); ?></p>
                <p><strong>Contato:</strong> <?php echo e($veiculo->contato ?? '---'); ?></p>
                <div class="mt-3">
                  <a href="#" class="btn btn-secondary">Fechar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <div class="d-flex justify-content-center">
    <?php echo e($veiculos->links()); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/publico/index.blade.php ENDPATH**/ ?>