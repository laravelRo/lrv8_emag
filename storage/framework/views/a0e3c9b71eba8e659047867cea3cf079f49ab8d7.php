<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
    data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
    <h6 class="m-0">Sections</h6>
    <i class="fa fa-angle-down text-dark"></i>
</a>
<nav class="collapse <?php echo e($showMenu == 1 ? 'show' : ''); ?> position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
    <div class="navbar-nav w-100 overflow-hidden">

        <?php $__empty_1 = true; $__currentLoopData = $sections_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('section', $section->slug)); ?>" class="nav-item nav-link"><i
                    class="<?php echo e($section->icon); ?> mr-2"></i><?php echo e($section->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p> No sections in site </p>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/components/content/sections-list.blade.php ENDPATH**/ ?>