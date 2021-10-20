<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $__empty_1 = true; $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="carousel-item <?php echo e($loop->iteration == 1 ? 'active' : ''); ?>">
                <img class=" img-fluid" src="<?php echo e($section->photoUrl()); ?>" alt="<?php echo e($section->name); ?>">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3"><?php echo e($section->description); ?></h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4"><i
                                class="<?php echo e($section->icon); ?> mr-2"></i> <?php echo e($section->name); ?></h3>
                        <a href="<?php echo e(route('section', $section->slug)); ?>" class="btn btn-light py-2 px-3">View
                            Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>

    </div>

    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/components/content/sections-slider.blade.php ENDPATH**/ ?>