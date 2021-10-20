<?php $__env->startSection('meta_title', 'Resetare parola'); ?>
<?php $__env->startSection('meta_description', 'Cerere resetare parola utilizator'); ?>
<?php $__env->startSection('meta_keywords', 'emag larvel 8, login accout, register account'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center py-4 justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Cerere link resetare parola</h1>
            <form style="width:500px;" action="<?php echo e(route('password.email')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="email">Adresa email cont *</label>
                    <input name="email" type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="form-group mb-0">
                    <input type="submit" value="Link resetare parola" class="btn btn-primary btn-block px-3">
                </div>
            </form>

            <?php
                if (session('status')) {
                    alert()
                        ->success('Linkul a fost trimis', session('status'))
                        ->persistent(true, false);
                }

            ?>
            <?php echo e(session('status')); ?>



            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php
                    alert()
                        ->error('Eroare', $message)
                        ->persistent(true, false);
                ?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>
    </div>

    <!-- Page Header End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/user/reset-password.blade.php ENDPATH**/ ?>