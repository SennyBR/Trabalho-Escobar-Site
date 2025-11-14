<?php $__env->startSection('title','Entrar'); ?>
<?php $__env->startSection('content'); ?>
  <h2>Entrar</h2>
  <form method="POST" action="<?php echo e(route('login.post')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label>Email</label>
      <input name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <?php if($errors->has('login')): ?> <div class="alert alert-danger"><?php echo e($errors->first('login')); ?></div> <?php endif; ?>
    <button class="btn btn-primary">Entrar</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/auth/login.blade.php ENDPATH**/ ?>