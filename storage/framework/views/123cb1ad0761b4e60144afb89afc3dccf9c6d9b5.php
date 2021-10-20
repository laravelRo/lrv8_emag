<?php $__env->startSection('meta_title', 'Verificare email'); ?>
<?php $__env->startSection('meta_description', 'Cerere verificare email'); ?>
<?php $__env->startSection('meta_keywords', 'emag larvel 8, verificare email utilizator curent'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center py-4 justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Validare cont utilizator</h1>
            <p>
                Nu puteti accesa aceasta sectiune a sitului fara a avea emailul validat. Va rugam apasati butonul de mai jos
                pentru a primi un email cu un link de validare a contului.
            </p>
            <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-0">
                    <input type="submit" value="Trimite email validare" class="btn btn-primary btn-block px-3">
                </div>

            </form>
            <?php if(session('status') == 'verification-link-sent'): ?>
                <div class="mb-4 font-medium text-sm text-green-600">
                    A fost trimis un nou email la adresa <?php echo e(auth()->user()->email); ?> pentru validarea contului
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/user/verify-email.blade.php ENDPATH**/ ?>