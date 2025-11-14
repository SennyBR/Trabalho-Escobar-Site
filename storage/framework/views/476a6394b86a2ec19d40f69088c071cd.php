<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $__env->yieldContent('title','Carros de Orda'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f0f0f;
            color: #eee;
        }

        .card-custom {
            background: #111;
            border: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,.6);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .card-expanded:target {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 70%;
            transform: translate(-50%, -50%);
            z-index: 2000;
            background: #fff;
            color: #111;
            box-shadow: 0 20px 40px rgba(0,0,0,.6);
            border-radius: 12px;
        }

        .dimmed {
            filter: blur(2px) grayscale(.1) brightness(.6);
            transform: scale(.98);
            transition: all .2s;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
        Carros de Orda
    </a>

    <div>
        <?php if(Auth::check()): ?>
            <a class="text-white me-3" href="<?php echo e(route('admin.veiculos.index')); ?>">Admin</a>
            <a class="text-white me-3" href="<?php echo e(route('profile.edit')); ?>">Perfil</a>

            <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <button class="btn btn-outline-light btn-sm">Sair</button>
            </form>

        <?php else: ?>
            <a class="text-white me-3" href="<?php echo e(route('register')); ?>">Cadastrar-se</a>
            <a class="text-white" href="<?php echo e(route('login')); ?>">Entrar</a>
        <?php endif; ?>
    </div>
</nav>

<div class="container py-4">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php /**PATH C:\Users\zueir\Desktop\carro-de-orda\carro-de-orda\resources\views/template/index.blade.php ENDPATH**/ ?>