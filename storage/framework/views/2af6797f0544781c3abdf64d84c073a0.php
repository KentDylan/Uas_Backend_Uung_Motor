<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 m-auto">
                <div class="card card-body">
                    <h1 class="text-center mb-3">
                        <i class="fas fa-user-plus"></i> Register
                    </h1>
                    <form action="" method="">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="mb-3" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control mb-3"
                                placeholder="Enter Name" value="" />
                        </div>
                        <div class="form-group">
                            <label class="mb-3" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control mb-3"
                                placeholder="Enter Email" value="" />
                        </div>
                        <div class="form-group">
                            <label class="mb-3" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control mb-3"
                                placeholder="Create Password" />
                        </div>
                        <div class="form-group">
                            <label class="mb-3" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control mb-4" placeholder="Confirm Password" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </form>
                    <p class="lead mt-4">Have An Account? <a href="<?php echo e(route('login')); ?>">Login</a></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\mantuls\Uung_Motor_Final - Copy\resources\views/auth/register.blade.php ENDPATH**/ ?>