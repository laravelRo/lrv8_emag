<?php $__env->startSection('customCss'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customJs'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        window.blockUserConfirm = function(id, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati blocarea utilizatorului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Block',
                confirmButtonColor: '#e3342f',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('blockUser', id);
                    Swal.fire(
                        'Utilizator blocat!',
                        'Utilizatorul ' + name + ' a fost blocat!',
                        'success'
                    );

                }
            });
        }
    </script>
    
    <script>
        window.activateUserConfirm = function(id, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati reactivarea utilizatorului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Activate',
                confirmButtonColor: '#283ad6',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('activateUser', id);
                    Swal.fire(
                        'Utilizator activat!',
                        'Utilizatorul ' + name + ' a fost activat!',
                        'success'
                    );

                }
            });
        }
    </script>

    
    <script>
        window.deleteUserConfirm = function(id, name) {
            Swal.fire({
                icon: 'question',
                text: 'Confirmati stergerea definitiva a utilizatorului ' + name + ' ?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                confirmButtonColor: '#e3342f',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteUser', id);
                    Swal.fire(
                        'Utilizator sters definitiv!',
                        'Utilizatorul ' + name + ' a fost sters definitiv!',
                        'success'
                    );

                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users')->html();
} elseif ($_instance->childHasBeenRendered('TD33Kdh')) {
    $componentId = $_instance->getRenderedChildComponentId('TD33Kdh');
    $componentTag = $_instance->getRenderedChildComponentTagName('TD33Kdh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TD33Kdh');
} else {
    $response = \Livewire\Livewire::mount('admin.users');
    $html = $response->html();
    $_instance->logRenderedChild('TD33Kdh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/admin/users/users-view.blade.php ENDPATH**/ ?>