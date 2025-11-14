<?php $__env->startSection('title', 'Meus veículos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Meus anúncios</h1>

    <a href="<?php echo e(route('admin.veiculos.create')); ?>" class="btn btn-primary mb-3">
        Adicionar veículo
    </a>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Marca/Modelo</th>
                <th>Ano</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
    <div class="d-flex gap-1">
        <?php $__currentLoopData = [$v->foto1, $v->foto2, $v->foto3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e($foto); ?>"
                 style="width:70px; height:50px; object-fit:cover; border-radius:4px;">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</td>


                    <td><?php echo e($v->nome_veiculo); ?></td>

                    <td>
                        <?php echo e($v->marca); ?> / <?php echo e($v->modelo); ?>

                    </td>

                    <td><?php echo e($v->ano); ?></td>

                    <td>
                        R$ <?php echo e(number_format($v->valor, 2, ',', '.')); ?>

                    </td>

                    <td>
                        <a href="<?php echo e(route('admin.veiculos.edit', $v->id)); ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="<?php echo e(route('admin.veiculos.destroy', $v->id)); ?>"
                              method="POST"
                              style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($veiculos->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/admin/index.blade.php ENDPATH**/ ?>