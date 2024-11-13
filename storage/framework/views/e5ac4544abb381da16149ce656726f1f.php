<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body class="body">

    <nav class="navbar navbar-expand-lg nav-color">
    <ul class="navbar-nav">
        <li class="nav-item h2 rem">
            <a href="/" class="btn btn-success">☘</a>
        </li>
        <li class="nav-item h2 reem">
            <a href="/create">Add a new plant!</a>
        </li>
    </ul>
    </nav>

    <?php echo $__env->yieldContent('nav'); ?>

    <script src="<?php echo e(asset('assets/bootstrap.min.js')); ?>"></script>

</body>
</html><?php /**PATH E:\1. school\1.year 3\IT\U22\laravel\task\resources\views/layouts/dressup.blade.php ENDPATH**/ ?>