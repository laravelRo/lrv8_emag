<?php $__env->startSection('content'); ?>
    <main>
        <div class="container-fluid px-4">


            <h1 class="mt-4">Staff members - Edit staff <span class="text-info"><?php echo e($user->name); ?></span> /
                <span class="text-danger"><?php echo e($user->id); ?></span>
            </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo e(route('control-panel')); ?>">Control Panel</a></li>
                <li class="breadcrumb-item "><a href="<?php echo e(route('show.staff')); ?>">Staff members</a></li>
                <li class="breadcrumb-item active">Edit staff data <span class="text-info"><?php echo e($user->name); ?></span>
                    with id <span class="text-danger"><?php echo e($user->id); ?></span> </li>
            </ol>
            <div class="row">
                
                <div class="col-md-9">
                    <form id="dates" action="<?php echo e(route('update.staff', $user->id)); ?>" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="card p-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="name" class="form-label">Nume si prenume*</label>
                                    <input name="name" value="<?php echo e(old('name', $user->name)); ?>" type="text"
                                        class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="name">
                                    <?php $__errorArgs = ['name'];
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

                                <div class="col-md-5">
                                    <label for="email" class="form-label">Email*</label>
                                    <input name="email" value="<?php echo e(old('email', $user->email)); ?>" type="email"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="
                                                                                                                                                                                                                                                                                                    email"
                                        required>
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


                            </div>

                            <div class="row mt-3 d-flex align-items-end">
                                <div class="col-md-5">
                                    <div id="img-preview">
                                        <img id="photo-preview" src="<?php echo e($user->photoUrl()); ?>" alt=""
                                            style="max-width: 200px; max-height:200px; display:inline-block;">
                                    </div>
                                    <div class="custom-file">
                                        <label for="formFile" class="form-label">Selectati foto membru</label>
                                        <input class="form-control" value="<?php echo e(old('photo')); ?>" type="file"
                                            accept="image/*" id="photoFile" name="photo">
                                    </div>
                                    <?php $__errorArgs = ['photo'];
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

                                <div class="col-md-5 align-bottom">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Telefon (pot fi mai multe numere)</label>
                                        <input name="phone" value="<?php echo e(old('phone', $user->phone)); ?>" type="text"
                                            class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="phone">
                                        <?php $__errorArgs = ['phone'];
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
                                    <label class="form-label">Selectati functia*</label>
                                    <select class="form-select" aria-label="Default select example"
                                        value="<?php echo e(old('type', $user->type)); ?>" name="type">
                                        <option value="editor" <?php echo e($user->type == 'editor' ? 'selected' : ''); ?>>Editor
                                        </option>
                                        <option value="asistent" <?php echo e($user->type == 'asistent' ? 'selected' : ''); ?>>
                                            Asistent
                                        </option>
                                        <option value="manager" <?php echo e($user->type == 'manager' ? 'selected' : ''); ?>>Manager
                                        </option>
                                    </select>

                                    <?php $__errorArgs = ['type'];
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
                            </div>

                            
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success float-end">Update Staff</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                

                
                <div class="col-md-3">
                    <div class="row ">
                        <form id="password" action="<?php echo e(route('password.staff', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="alert alert-info">
                                Parola trebuie sa contina cel putin o litera, cel putin un numar si cel putin un simbol
                            </div>
                            <div class="card p-4 bg-light">
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Password*</label>
                                    <input name="password" type="password"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id=" password">
                                    <?php $__errorArgs = ['password'];
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
                                <div class="col-md-12">
                                    <label for="password_confirmation" class="form-label">Confirm password*</label>
                                    <input name="password_confirmation" type="password"
                                        class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="password_confirmation">
                                    <?php $__errorArgs = ['password_confirmation'];
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
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-danger float-end">Update password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                

                <div class="col-md-12">
                    <a href="<?php echo e(route('show.staff')); ?>" title="Return to staff list page"
                        class="btn btn-dark float-end">Return</a>
                </div>

            </div>
            

            
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customJs'); ?>

    <script>
        const chooseFile = document.getElementById("photoFile");
        const imgPreview = document.getElementById("img-preview");
        chooseFile.addEventListener("change", function() {
            getImgData();
        });

        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function() {
                    imgPreview.style.display = "block";
                    imgPreview.innerHTML = '<img src="' + this.result +
                        '" style="max-height:200px; max-width:200px;" class="photo-preview"/>';
                });
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/admin/personal/staff-edit.blade.php ENDPATH**/ ?>