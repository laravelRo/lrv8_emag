<?php echo $__env->make('front.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <?php echo $__env->make('front.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('front.partials.searchbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
                <?php if (isset($component)) { $__componentOriginalea7b2d6334ab79868ae7351eb6a70d53d58e170b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content\SectionsList::class, ['showMenu' => $menuv]); ?>
<?php $component->withName('content.sections-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalea7b2d6334ab79868ae7351eb6a70d53d58e170b)): ?>
<?php $component = $__componentOriginalea7b2d6334ab79868ae7351eb6a70d53d58e170b; ?>
<?php unset($__componentOriginalea7b2d6334ab79868ae7351eb6a70d53d58e170b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-9">
                <?php echo $__env->make('front.partials.menu-orizontal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Start -->
    <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <?php echo $__env->make('front.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/template.blade.php ENDPATH**/ ?>