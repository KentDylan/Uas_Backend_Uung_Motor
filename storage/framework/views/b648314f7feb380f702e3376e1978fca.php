<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Manage Appointments</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Email</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($appointment->user->email); ?></td>
                                <td><?php echo e($appointment->appointment_date); ?></td>
                                <td><?php echo e($appointment->appointment_time); ?></td>
                                <td><?php echo e(ucfirst($appointment->status)); ?></td>
                                <td>
                                    <form action="<?php echo e(route('appointment.accept', $appointment->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <button type="submit" class="btn btn-success btn-sm"
                                            <?php echo e($appointment->status != 'pending' ? 'disabled' : ''); ?>>Accept</button>
                                    </form>
                                    <form action="<?php echo e(route('appointment.reject', $appointment->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <button type="submit" class="btn btn-warning btn-sm"
                                            <?php echo e($appointment->status != 'pending' ? 'disabled' : ''); ?>>Reject</button>
                                    </form>
                                    <form action="<?php echo e(route('appointment.destroy', $appointment->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"
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

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-1\resources\views/admin-page/manage-appointment.blade.php ENDPATH**/ ?>