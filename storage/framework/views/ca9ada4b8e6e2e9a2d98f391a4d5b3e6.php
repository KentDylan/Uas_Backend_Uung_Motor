<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="mb-4">All Motorcycles</h2>
                <a href="<?php echo e(route('admin.motorcycles.create')); ?>" class="btn btn-primary mb-3">Add New Motorcycle</a>
                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Condition</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $motorcycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motorcycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($motorcycle->name); ?></td>
                                <td><?php echo e($motorcycle->price); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-info fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample<?php echo e($motorcycle->id); ?>" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Toggle Condition
                                    </button>
                                    <div class="collapse mt-2" id="collapseExample<?php echo e($motorcycle->id); ?>">
                                        <?php echo e($motorcycle->condition); ?>

                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.motorcycles.edit', $motorcycle)); ?>"
                                        class="btn btn-sm btn-primary fw-bold">Edit</a>
                                    <form action="<?php echo e(route('admin.motorcycles.destroy', $motorcycle)); ?>" method="POST"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger fw-bold"
                                            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-1\resources\views/admin-page/manage-motor.blade.php ENDPATH**/ ?>