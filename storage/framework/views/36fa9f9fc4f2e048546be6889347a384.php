
<?php $__env->startSection('nav'); ?>

<div class="container">
    <div class="row">

    <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="card index-card my-5">
                <img class="card-img-top index-image" src="<?php echo e($plant -> image); ?>" alt="Plant">
                <div class="card-body bud">
                    <h3 class="card-title"><?php echo e($plant -> name); ?></h3>
                    <a href="/plants/show/<?php echo e($plant -> id); ?>" class="btn btn-success">Unfold</a>
                    <a href="/plants/edit/<?php echo e($plant -> id); ?>" class="btn btn-success">Polish</a>
                    <a href="/plants/destroy/<?php echo e($plant -> id); ?>" class="btn btn-success">Burn</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dressup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\1. school\1.year 3\IT\U22\laravel\task\resources\views/plants/index.blade.php ENDPATH**/ ?>