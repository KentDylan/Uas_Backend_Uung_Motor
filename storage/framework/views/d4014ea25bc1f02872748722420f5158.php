<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Your Cart</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if(!$items||$items->isEmpty()): ?>
            <div class="alert alert-info mt-3" role="alert">
                Your shopping cart is empty.
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo e($item->motorcycle->image_path); ?>" class="img-fluid rounded-start"
                                alt="<?php echo e($item->motorcycle->name); ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Brand Name:
                                    <?php echo e($item->motorcycle->product->brand->name ?? 'Brand XYZ'); ?>

                                </h5>
                                <p class="card-text">Product Name: <?php echo e($item->motorcycle->name ?? 'Motorcycle ABC'); ?></p>
                                <p class="card-text"><strong>Price:</strong> $<?php echo e($item->motorcycle->price ?? '1000'); ?></p>
                                <div class="d-flex">
                                    <form action="<?php echo e(route('cart.remove', $item->id)); ?>" method="POST" class="me-2">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger fw-bold">Remove</button>
                                    </form>

                                    <a href="<?php echo e(route('payment', $item->motorcycle_id)); ?>"><button type="submit"
                                            class="btn btn-primary fw-bold">Checkout</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-FINAL - Copy\resources\views/cart.blade.php ENDPATH**/ ?>