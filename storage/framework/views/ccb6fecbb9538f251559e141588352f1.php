<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">My Orders</h1>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Product Name:
                        </h5>
                        <p class="card-text"><strong>Price:</strong></p>
                        <p class="card-text"><strong>Order Time:</strong>
                        </p>
                        <p class="card-text"><strong>Status:</strong> </p>
                        <div class="mb-3">
                            <form action="" method="" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-success">Finish</button>
                            </form>
                            <form action="" method="" class="d-inline">
                                <?php echo csrf_field(); ?>

                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\mantuls\Uung_Motor_Final - Figo\resources\views/order.blade.php ENDPATH**/ ?>