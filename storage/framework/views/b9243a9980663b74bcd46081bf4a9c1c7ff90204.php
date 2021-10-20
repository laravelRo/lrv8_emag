<div class="row bg-secondary py-2 px-xl-5">
    <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center">
            <?php if(auth()->guard()->check()): ?>
                <span class="text-dark"><b><?php echo e(auth()->user()->name); ?></b></span>
                <span class="text-muted px-2">|</span>

                <a class="text-primary" href="<?php echo e(route('settings')); ?>">Setari cont</a>
                <span class="text-muted px-2">|</span>

                <form class="d-none" method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                    <?php echo csrf_field(); ?>
                </form>
                <a href="#" class="text-dark pl-2"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <?php endif; ?>
            <span class="text-muted px-2">|</span>
            <a class="text-dark" href="">Support</a>
        </div>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
            <a class="text-dark px-2" href="">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="text-dark pl-2" href="">
                <i class="fab fa-youtube"></i>
            </a>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/partials/topbar.blade.php ENDPATH**/ ?>