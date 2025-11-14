<?php $__env->startSection('title','Editar veículo'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="mb-4">Editar veículo</h1>

<form method="POST" action="<?php echo e(route('admin.veiculos.update', $veiculo->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
        <label class="form-label">Nome do veículo</label>
        <input 
            name="nome_veiculo" 
            value="<?php echo e(old('nome_veiculo', $veiculo->nome_veiculo)); ?>" 
            class="form-control" 
            required
        >
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Marca</label>
            <input 
                name="marca" 
                value="<?php echo e(old('marca', $veiculo->marca)); ?>" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Modelo</label>
            <input 
                name="modelo" 
                value="<?php echo e(old('modelo', $veiculo->modelo)); ?>" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Cor</label>
            <input 
                name="cor" 
                value="<?php echo e(old('cor', $veiculo->cor)); ?>" 
                class="form-control" 
                required
            >
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Ano</label>
            <input 
                name="ano" 
                value="<?php echo e(old('ano', $veiculo->ano)); ?>" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Quilometragem</label>
            <input 
                name="quilometragem" 
                value="<?php echo e(old('quilometragem', $veiculo->quilometragem)); ?>" 
                class="form-control" 
                required
            >
        </div>

        <div class="col">
            <label class="form-label">Valor</label>
            <input 
                name="valor" 
                value="<?php echo e(old('valor', $veiculo->valor)); ?>" 
                class="form-control" 
                required
            >
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            name="descricao" 
            class="form-control" 
            rows="4"
        ><?php echo e(old('descricao', $veiculo->descricao)); ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 1 (URL)</label>
        <input 
            name="foto1" 
            value="<?php echo e(old('foto1', $veiculo->foto1)); ?>" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 2 (URL)</label>
        <input 
            name="foto2" 
            value="<?php echo e(old('foto2', $veiculo->foto2)); ?>" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Foto 3 (URL)</label>
        <input 
            name="foto3" 
            value="<?php echo e(old('foto3', $veiculo->foto3)); ?>" 
            class="form-control" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Proprietário</label>
        <input 
            name="proprietario" 
            value="<?php echo e(old('proprietario', $veiculo->proprietario)); ?>" 
            class="form-control"
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Contato</label>
        <input 
            name="contato" 
            value="<?php echo e(old('contato', $veiculo->contato)); ?>" 
            class="form-control"
        >
    </div>

    <button class="btn btn-success">Atualizar</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/admin/edit.blade.php ENDPATH**/ ?>