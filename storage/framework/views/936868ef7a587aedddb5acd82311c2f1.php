<?php $__env->startSection('title','Cadastrar veículo'); ?>
<?php $__env->startSection('content'); ?>
  <h1>Novo Veículo</h1>
  <form method="POST" action="<?php echo e(route('admin.veiculos.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label>Nome do veículo</label>
      <input name="nome_veiculo" value="<?php echo e(old('nome_veiculo')); ?>" class="form-control" required>
    </div>

    <div class="row mb-3">
      <div class="col">
        <label>Marca</label>
        <input name="marca" value="<?php echo e(old('marca')); ?>" class="form-control" required>
      </div>

      <div class="col">
        <label>Modelo</label>
      <input name="modelo" value="<?php echo e(old('modelo')); ?>" class="form-control" required>
    </div>

      <div class="col">
        <label>Cor</label>
        <input name="cor" value="<?php echo e(old('cor')); ?>" class="form-control" required>
    </div>
    </div>
  
    <div class="row mb-3">
      <div class="col">
        <label>Ano</label>
        <input name="ano" value="<?php echo e(old('ano')); ?>" class="form-control" required>
    </div>

      <div class="col">
        <label>Quilometragem</label>
        <input name="quilometragem" value="<?php echo e(old('quilometragem')); ?>" class="form-control" required>
    </div>
      <div class="col">
        <label>Valor</label>
        <input name="valor" value="<?php echo e(old('valor')); ?>" class="form-control" required>
    </div>


    <div class="mb-3">
      <label>Descrição</label>
    <textarea name="descricao" class="form-control"><?php echo e(old('descricao')); ?></textarea>
   
    <div class="mb-3"><label>Foto 1 (URL)</label>
    <input name="foto1" value="<?php echo e(old('foto1')); ?>" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Foto 2 (URL)</label>
      <input name="foto2" value="<?php echo e(old('foto2')); ?>" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Foto 3 (URL)</label>
      <input name="foto3" value="<?php echo e(old('foto3')); ?>" class="form-control" required>
  </div>

    <div class="mb-3">
      <label>Proprietário</label>
      <input name="proprietario" value="<?php echo e(old('proprietario')); ?>" class="form-control">
  </div>

    <div class="mb-3">
      <label>Contato</label>
      <input name="contato" value="<?php echo e(old('contato')); ?>" class="form-control">
  </div>

    <button class="btn btn-success">Salvar</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/admin/create.blade.php ENDPATH**/ ?>