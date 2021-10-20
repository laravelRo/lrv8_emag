<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Staff </title>
    <link href="<?php echo e(asset('admin/css/styles.css')); ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header" style="background-color: rgb(24, 23, 61); color:white;">
                        <h3 class="text-center font-weight-light my-4">Login for admins</h3>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" action="<?php echo e(route('staff.auth')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" id="inputEmail" type="email"
                                    placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" class="form-control" id="inputPassword" type="password"
                                    placeholder="Password" />
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">

                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3" style="background-color: rgb(24, 23, 61); color:white;">
                        <div class="small">Logare membrii administrare site</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/admin/personal/login.blade.php ENDPATH**/ ?>