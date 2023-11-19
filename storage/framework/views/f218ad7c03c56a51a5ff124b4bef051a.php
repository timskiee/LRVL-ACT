<!DOCTYPE html>
<html>
<head>
    <!-- Your head content -->
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Route\resources\views/home.blade.php ENDPATH**/ ?>