<?php $__env->startSection('title','Registrar'); ?>
<?php $__env->startSection('content'); ?>
  <h2>Registrar</h2>
  <form method="POST" action="<?php echo e(route('register.post')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label>Nome</label>
      <input name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input name="email" type="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Confirmar senha</label>
      <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <button class="btn btn-success">Registrar</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/auth/register.blade.php ENDPATH**/ ?>