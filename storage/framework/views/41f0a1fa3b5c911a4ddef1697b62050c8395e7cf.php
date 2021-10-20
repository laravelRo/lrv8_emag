<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sections
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo e(route('control-panel')); ?>">Control Panel</a></li>
                <li class="breadcrumb-item active">Sections</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List of Sections - <?php echo e($sections->count()); ?>



                    <a href="<?php echo e(route('sections.new')); ?>" class="btn btn-success float-end">
                        <i class="fas fa-plus"></i> Add section
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Name</th>
                                <th>Description</th>
                                <th class="text-center" style="width: 150px;">Photo</th>
                                <th>Position</th>
                                <th>Active / Promo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-center">Photo</th>
                                <th>Position</th>
                                <th>Active / Promo</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>

                                        <?php if(isset($section->icon)): ?>
                                            <i class="<?php echo e($section->icon); ?>"></i>
                                        <?php else: ?>
                                            <i class="fas fa-th-list"></i>
                                        <?php endif; ?>
                                        <?php echo e($section->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($section->description); ?>

                                    </td>
                                    <td class="text-center">
                                        <img src="<?php echo e($section->photoUrl()); ?>" width="60" alt="">
                                    </td>
                                    <td>
                                        <?php echo e($section->position); ?>

                                    </td>
                                    <td style="width: 220px;">
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sections-status',['section'=>$section])->html();
} elseif ($_instance->childHasBeenRendered('0CKmGEF')) {
    $componentId = $_instance->getRenderedChildComponentId('0CKmGEF');
    $componentTag = $_instance->getRenderedChildComponentTagName('0CKmGEF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0CKmGEF');
} else {
    $response = \Livewire\Livewire::mount('admin.sections-status',['section'=>$section]);
    $html = $response->html();
    $_instance->logRenderedChild('0CKmGEF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                    </td>

                                    <td style="width: 100px;">
                                        <a title="Editeaza sectiune" href="<?php echo e(route('sections.edit', $section->id)); ?>"
                                            class="btn btn-success btn-sm btn-circle"><i class="fas fa-edit fa-2x"></i>
                                        </a>
                                        <button class="btn btn-danger btn-sm btn-circle" onclick="">
                                            <i class="fas fa-minus-square fa-2x"></i>
                                        </button>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-info">
                                    Nu exista nici o sectiune a sitului
                                </div>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/admin/content/sections/list.blade.php ENDPATH**/ ?>