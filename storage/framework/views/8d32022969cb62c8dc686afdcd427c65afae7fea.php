<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                
                <?php if (isset($component)) { $__componentOriginal319d1c66adc3e0342852ffbbbc2a845a224b9a7d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Content\SectionsSlider::class, []); ?>
<?php $component->withName('content.sections-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal319d1c66adc3e0342852ffbbbc2a845a224b9a7d)): ?>
<?php $component = $__componentOriginal319d1c66adc3e0342852ffbbbc2a845a224b9a7d; ?>
<?php unset($__componentOriginal319d1c66adc3e0342852ffbbbc2a845a224b9a7d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <?php echo $__env->make('front.partials.featured', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('front.partials.promo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('front.partials.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('front.partials.brands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/home.blade.php ENDPATH**/ ?>