<?php $__env->startSection('title', 'Meu perfil'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Editar perfil</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('profile.update')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Nome</label>
            <input name="name"
                   value="<?php echo e(old('name', $user->name)); ?>"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input name="email"
                   type="email"
                   value="<?php echo e(old('email', $user->email)); ?>"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Nova senha (deixe em branco para manter)</label>
            <input name="password"
                   type="password"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Confirmar nova senha</label>
            <input name="password_confirmation"
                   type="password"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Salvar
        </button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/perfil/edit.blade.php ENDPATH**/ ?>