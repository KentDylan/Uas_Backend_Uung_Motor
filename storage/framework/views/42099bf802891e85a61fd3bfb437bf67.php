<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Your Cart</h1>

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Brand Name:

                        </h5>
                        <p class="card-text">Product Name: </p>
                        <p class="card-text"><strong>Price:</strong> </p>
                        <div class="d-flex">
                            <form action="" method="" class="me-2">
                                <?php echo csrf_field(); ?>

                                <button type="submit" class="btn btn-danger fw-bold">Remove</button>
                            </form>

                            <a href=""><button type="submit" class="btn btn-primary fw-bold">Checkout</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nofooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\mantuls\Uung_Motor_Final - Figo\resources\views/cart.blade.php ENDPATH**/ ?>