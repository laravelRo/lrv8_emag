<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Staff members
                <?php echo $blocked_members ? '<span class="text-danger"> - blocked staff </span>' : ''; ?> - <?php echo e($users->count()); ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo e(route('control-panel')); ?>">Control Panel</a></li>
                <li class="breadcrumb-item active">Staff members</li>
            </ol>

            
            <div class="card mb-4">
                <div class="card-body bg-warning">
                    <b>Manager principal:</b> Galan Rares, <b>email:</b> manager@emag.com, <b>telefon:</b> 0777 888 999
                    <img src="<?php echo e(asset('admin/images/manager.jpg')); ?>" width="60" alt="">
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List of Staff Members -
                    <?php if($blocked_members): ?>
                        <a class="link-success" href="<?php echo e(route('show.staff')); ?>">
                            Staff members
                        </a>
                    <?php else: ?>
                        <a class="link-danger " href="<?php echo e(route('show.staff', ['blocked' => true])); ?>">
                            Blocked members
                        </a>
                        <a href="<?php echo e(route('new.staff')); ?>" class="btn btn-success float-end">
                            <i class="fas fa-user-plus"></i> Add member
                        </a>
                    <?php endif; ?>


                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Photo</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">
                                    Photo
                                </th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <?php echo e($user->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($user->email); ?>

                                    </td>
                                    <td>
                                        <?php echo e($user->phone); ?>

                                    </td>
                                    <td class="text-center">
                                        <img src="<?php echo e($user->photoUrl()); ?>" width="60" alt="">
                                    </td>
                                    <td>
                                        <?php echo e($user->type); ?>

                                    </td>
                                    <td>
                                        <?php if(!$user->trashed()): ?>
                                            <a title="Editeaza membru Staff" href="<?php echo e(route('edit.staff', $user->id)); ?>"
                                                class="btn btn-success btn-md btn-circle"><i
                                                    class="fas fa-user-edit fa-2x"></i>
                                            </a>

                                            
                                            <form id="form-delete-<?php echo e($user->id); ?>"
                                                action="<?php echo e(route('block.staff', $user->id)); ?>" method="POST"
                                                style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                            </form>
                                            <button class="btn btn-danger btn-md btn-circle"
                                                onclick="deleteConfirm('form-delete-<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')">
                                                <i class="fas fa-user-slash fa-2x"></i>
                                            </button>
                                        <?php else: ?>
                                            
                                            <form id="form-restore-<?php echo e($user->id); ?>"
                                                action="<?php echo e(route('restore.staff', $user->id)); ?>" method="POST"
                                                style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('put'); ?>
                                            </form>

                                            <button class="btn btn-primary"
                                                onclick="restoreConfirm('form-restore-<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')">
                                                Restore staff
                                            </button>

                                            

                                            
                                            <form id="form-remove-<?php echo e($user->id); ?>"
                                                action="<?php echo e(route('remove.staff', $user->id)); ?>" method="POST"
                                                style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                            </form>
                                            <button class="btn btn-danger"
                                                onclick="removeConfirm('form-remove-<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')">
                                                Remove Staff
                                            </button>


                                            

                                        <?php endif; ?>

                                        
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-info">
                                    Nu exista membrii ai staff-ului inregistrati
                                </div>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customJs'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('admin/js/datatables-simple-demo.js')); ?>"></script>

    <script>
        window.deleteConfirm = function(formId, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati blocarea utilizatorului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Block',
                confirmButtonColor: '#e3342f',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>
    <script>
        window.restoreConfirm = function(formId, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati deblocarea membrului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Restore',
                confirmButtonColor: '#0d4aa5',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>
    <script>
        window.removeConfirm = function(formId, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati stergerea definitiva a membrului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Remove',
                confirmButtonColor: '#e3342f',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/admin/personal/staff-view.blade.php ENDPATH**/ ?>