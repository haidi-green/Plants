
<?php $__env->startSection('nav'); ?>

<div class="container">
    <form action="/plants/update/<?php echo e($plant -> id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label mt-5">Plant Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($plant -> name); ?>">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Plant Image URL</label>
            <input type="text" class="form-control" name="image" value="<?php echo e($plant -> image); ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Plant Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo e($plant -> description); ?>">
        </div>

        <button type="submit" class="btn btn-success mt-2">Polish your plant!</button>
        <?php $__env->stopSection(); ?>
    </form>
</div>

<?php echo $__env->make('layouts.dressup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\0. publish on github\1.year 3\IT\U22 (laravel)\laravel\task\resources\views/plants/edit.blade.php ENDPATH**/ ?>