
<?php $__env->startSection('nav'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card index-card my-5">
                <img class="card-img-top index-image" src="<?php echo e($plant -> image); ?>" alt="Plant">
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="card-body">
                <h1 class="card-title snow"><?php echo e($plant -> name); ?></h1>
                <p class="card-text snow"><?php echo e($plant -> description); ?></p>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
    </div>
</div>

<?php echo $__env->make('layouts.dressup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\0. publish on github\1.year 3\IT\U22 (laravel)\laravel\task\resources\views/plants/show.blade.php ENDPATH**/ ?>