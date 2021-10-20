<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('meta_title','E-mag Laravel platform'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $__env->yieldContent('meta_keywords','Laravel 8, eshop'); ?>" name="keywords">
    <meta content="<?php echo $__env->yieldContent('meta_description','E-mag with Laravel 8'); ?>" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('front/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/css/custom.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('customCss'); ?>
</head>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/partials/head.blade.php ENDPATH**/ ?>