<nav>
    <input type="checkbox" id="sidebar-active">
    <label for="sidebar-active" class="open-sidebar-button">
        <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
        </svg>
    </label>
    <label id="overlay" for="sidebar-active"></label>
    <div class="links-container">
        <label for="sidebar-active" class="close-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32">
                <path
                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </label>

        <p class="home-link">Uung<span>Motor</span></p>
        <a href="<?php echo e(url('/')); ?>" class="<?php echo e(request()->is('/') ? 'active' : ''); ?>">Home</a>
        <a href="<?php echo e(route('product')); ?>" class="<?php echo e(request()->routeIs('product') ? 'active' : ''); ?>">Products</a>
        <a href="<?php echo e(route('cart')); ?>" class="<?php echo e(request()->routeIs('cart') ? 'active' : ''); ?>">Cart</a>
        <a href="<?php echo e(route('order')); ?>" class="<?php echo e(request()->routeIs('order') ? 'active' : ''); ?>">Order</a>
        <?php if(auth()->check() && auth()->user()->email == 'admin@gmail.com'): ?>
            <a href="<?php echo e(route('dashboard')); ?>"
                class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">Dashboard</a>
        <?php endif; ?>
        <a href="<?php echo e(route('login')); ?>" class="<?php echo e(request()->routeIs('login') ? 'active' : ''); ?>">Login</a>
        <a href="<?php echo e(route('profile')); ?>" class="<?php echo e(request()->routeIs('profile') ? 'active' : ''); ?>">
            <i class="bi bi-person-circle fw-bold fs-4"></i>
        </a>
    </div>
</nav>
<?php /**PATH C:\Users\UNTAR\Semester 4\Back-End\UAS\github\Uung_Motor-UI\resources\views/layouts/nav.blade.php ENDPATH**/ ?>