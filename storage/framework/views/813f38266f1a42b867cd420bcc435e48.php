<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Schedule an Appointment</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('appointment.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="date" class="form-control" id="appointment_date" name="appointment_date"
                    min="<?php echo e($minDate); ?>" max="<?php echo e($maxDate); ?>" value="<?php echo e(old('appointment_date')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="appointment_time" class="form-label">Appointment Time</label>
                <select class="form-select" id="appointment_time" name="appointment_time" required>
                    <option value="">Select Time</option>
                    <?php $__currentLoopData = $timeSlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeSlot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($timeSlot); ?>" <?php echo e(old('appointment_time') == $timeSlot ? 'selected' : ''); ?>>
                            <?php echo e($timeSlot); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>

        <div class="mt-5">
            <h2>Your Appointments</h2>
            <?php if($appointments->isEmpty()): ?>
                <p>You have no scheduled appointments.</p>
            <?php else: ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($appointment->appointment_date); ?></td>
                                <td><?php echo e($appointment->appointment_time); ?></td>
                                <td><?php echo e(ucfirst($appointment->status)); ?></td>
                                <td>
                                    <form action="<?php echo e(route('appointment.delete', $appointment->id)); ?>" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            <?php echo e($appointment->status !== 'rejected' ? 'disabled' : ''); ?>>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-FINAL - Copy\resources\views/appointment.blade.php ENDPATH**/ ?>