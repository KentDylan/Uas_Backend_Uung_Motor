<?php $__env->startSection('content'); ?>
    <div class="pageheader__container" style="height: auto;">
        <div class="pageheader__wrapper">
            <div class="introduction">
                <div class="introduction__headline">
                    <h1 class="headline1 headline--pageMain active" data-active-switch=""
                        style="margin-top: -10px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                        All Models.
                    </h1>
                    <div class="headline headline--pageSub active" data-active-switch=""
                        style="margin-top: 0px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                        Find your <span style="white-space: nowrap;">Uung Motorrad</span> bike.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request('brand') == '' ? 'active' : ''); ?>" aria-current="page"
                            href="<?php echo e(route('product')); ?>">All</a>
                    </li>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(request('brand') == $brand->id ? 'active' : ''); ?>"
                                href="<?php echo e(route('product', ['brand' => $brand->id])); ?>"><?php echo e($brand->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <form class="d-flex" role="search" method="GET" action="<?php echo e(route('product')); ?>">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"
                        value="<?php echo e(request('search')); ?>">
                    
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="product-container mt-4">
        <?php if($products->isEmpty()): ?>
            <div class="alert alert-info mt-3 mx-auto text-center" style="width: 80%;" role="alert">
                No products found.
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <img src="<?php echo e($product->image_path); ?>" alt="<?php echo e($product->name); ?>">
                    <div class="product-info">
                        <div class="product-title"><?php echo e($product->name); ?></div>
                        <div class="product-description"><?php echo e($product->brand->name); ?></div>
                        <div class="product-price">Rp <?php echo e(number_format($product->price_min, 0, ',', '.')); ?> - Rp
                            <?php echo e(number_format($product->price_max, 0, ',', '.')); ?></div>
                        <a href="<?php echo e(route('motorcycle', $product->id)); ?>"><button class="btn">See More</button></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\mantuls\Uung_Motor_Final - Figo\resources\views/product.blade.php ENDPATH**/ ?>