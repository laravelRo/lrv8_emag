<?php $__env->startSection('panel_content'); ?>
    <h1 class="text-center">
        Resetare parola
    </h1>
    <h3 class="text-center">
        <?php echo e(auth()->user()->name); ?> | cont <span class="text-primary"><?php echo e(auth()->user()->type); ?></span>
    </h3>
    <div class="alert alert-info">
        Va puteti schimba parola curenta daca considerati ca nu mai este adecvata utilizarii acestui cont.<br>
        Introduceti parola curenta, apoi noua parola si confirmati aceasta noua parola.
    </div>
    <div class="card mx-auto w-75 p-3">
        <form class="mx-auto" style="width:500px;" action="<?php echo e(route('change-pass')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="current_pass">Parola actuala*</label>
                <input name="current_pass" type="text" class="form-control <?php $__errorArgs = ['current_pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="current_pass">
                <?php $__errorArgs = ['current_pass'];
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
            <div class="form-group">
                <label for="newpassword">Noua parola *</label>
                <input name="newpassword" type="password" class="form-control <?php $__errorArgs = ['newpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="newpassword">
                <?php $__errorArgs = ['newpassword'];
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
            <div class="form-group">
                <label for="newpassword_confirmation">Confirmare noua parola *</label>
                <input name="newpassword_confirmation" type="password"
                    class="form-control <?php $__errorArgs = ['newpassword_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="newpassword_confirmation">
                <?php $__errorArgs = ['newpassword_confirmation'];
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
                <input type="submit" value="Reseteaza parola" class="btn btn-primary btn-block px-3">
            </div>
        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.user.cpanel.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/user/cpanel/reset.blade.php ENDPATH**/ ?>