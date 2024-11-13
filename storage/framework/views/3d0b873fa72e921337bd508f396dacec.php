
<?php $__env->startSection('nav'); ?>

<div class="container">
    <form action="/create/store" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label mt-5">Plant Name</label>
            <input type="text" class="form-control" name="name" placeholder="Dandelion">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Plant Image URL</label>
            <input type="text" class="form-control" name="image" placeholder="URL">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Plant Description</label>
            <input type="text" class="form-control" name="description" placeholder="Pretty!">
        </div>

        <button type="submit" class="btn btn-success mt-2">Add a new plant!</button>
        <?php $__env->stopSection(); ?>
    </form>
</div>

<?php echo $__env->make('layouts.dressup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\1. school\1.year 3\IT\U22\laravel\task\resources\views/plants/create.blade.php ENDPATH**/ ?>