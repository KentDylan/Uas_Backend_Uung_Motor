<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">All Orders</h1>

        <?php if($orders->isEmpty()): ?>
            <div class="alert alert-info mt-3" role="alert">
                No orders found.
            </div>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Motorcycle Name</th>
                        <th>Motorcycle ID</th>
                        <th>Ordered Time</th>
                        <th>Ordered By</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($order->motorcycle->name); ?></td>
                            <td><?php echo e($order->motorcycle_id); ?></td>
                            <td><?php echo e($order->created_at->format('Y-m-d H:i:s')); ?></td>
                            <td><?php echo e($order->user->email); ?></td>
                            <td>$<?php echo e($order->price); ?></td>
                            <td>
                                <?php if($order->status == 'Pending'): ?>
                                    <form action="<?php echo e(route('admin.orders.ship', $order->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary">Ship</button>
                                    </form>
                                <?php else: ?>
                                    <button class="btn btn-secondary" disabled>Shipped</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-1\resources\views/admin-page/manage-order.blade.php ENDPATH**/ ?>