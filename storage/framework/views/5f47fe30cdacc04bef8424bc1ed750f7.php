<!-- resources/views/motorcycles.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="pageheader__container" style="height: auto;">
        <div class="pageheader__wrapper">
            <div class="introduction">
                <div class="custom-headline">
                    <h1 class="custom-headline__main">
                        Available Motorcycles
                    </h1>
                    <div class="custom-headline__sub">
                        Choose your perfect ride from our wide selection of motorcycles.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="motorcycle-container">
        <?php if($motorcycles->isEmpty()): ?>
            <div class="alert alert-info mt-3" role="alert">
                <p>No motorcycles available at the moment. Please check back later.</p>
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $motorcycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorcycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="motorcycle-card">
                    <a href="<?php echo e($motorcycle->link); ?>" target="_blank">
                        <?php if(filter_var($motorcycle->image_path, FILTER_VALIDATE_URL)): ?>
                            <img src="<?php echo e($motorcycle->image_path); ?>" alt="<?php echo e($motorcycle->name); ?>" class="motorcycle-image">
                        <?php else: ?>
                            <img src="<?php echo e(asset($motorcycle->image_path)); ?>" alt="<?php echo e($motorcycle->name); ?>" class="motorcycle-image">
                        <?php endif; ?>
                    </a>
                    <div class="motorcycle-info">
                        <div class="motorcycle-title"><?php echo e($motorcycle->name); ?></div>
                        <div class="motorcycle-price">Rp <?php echo e(number_format($motorcycle->price, 0, ',', '.')); ?></div>
                        <div class="motorcycle-condition"><?php echo e($motorcycle->condition); ?></div>
                        <form action="<?php echo e(route('cart.add', $motorcycle->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="btn" type="submit">Add to
                                Cart</button>
                        </form>
                        <a href="<?php echo e($motorcycle->link); ?>" target="_blank" style="font-size: 14px">
                            Click here for more picture.
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\mantuls\Uung_Motor_Final - Copy\resources\views/motorcycle.blade.php ENDPATH**/ ?>