<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">My Orders</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if($orders->isEmpty()): ?>
            <div class="alert alert-info mt-3" role="alert">
                You haven't placed any orders yet.
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="<?php echo e($order->motorcycle->image_path); ?>" class="img-fluid rounded-start"
                                alt="<?php echo e($order->motorcycle->name); ?>">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title">Product Name:
                                    <?php echo e($order->motorcycle->name); ?>

                                </h5>
                                <p class="card-text"><strong>Price:</strong> $<?php echo e($order->price); ?></p>
                                <p class="card-text"><strong>Order Time:</strong>
                                    <?php echo e($order->created_at->format('Y-m-d H:i:s')); ?></p>
                                <p class="card-text"><strong>Status:</strong> <?php echo e($order->status); ?></p>
                                <div class="mb-3">
                                    <?php if($order->status === 'Shipped'): ?>
                                        <form action="<?php echo e(route('orders.finish', $order)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-success">Finish</button>
                                        </form>
                                    <?php else: ?>
                                        <button class="btn btn-success" disabled>Finish</button>
                                    <?php endif; ?>

                                    <?php if($order->status === 'Finished'): ?>
                                        <form action="<?php echo e(route('orders.destroy', $order)); ?>" method="POST"
                                            class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                        </form>
                                    <?php else: ?>
                                        <button class="btn btn-danger" disabled>Delete</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-FINAL - Copy\resources\views/order.blade.php ENDPATH**/ ?>