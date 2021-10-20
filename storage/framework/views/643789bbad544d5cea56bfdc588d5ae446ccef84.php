<?php $__env->startSection('panel_content'); ?>
    <h1 class="text-center">
        Informatii cont E-mag Laravel 8 test
    </h1>
    <h3 class="text-center">
        <?php echo e(auth()->user()->name); ?> | cont <span class="text-primary"><?php echo e(auth()->user()->type); ?></span>
    </h3>
    <p>
        In aceasta sectiune va puteti modifica datele contului pe situl E-mag Laravel 8 Test, puteti contacta
        administratorii sitului daca intamplinati probleme legate de comenzi, produse sau utilizarea sitului.
    </p>
    <p>
        In sectiunea <b>Adrese livrare / facturare</b> puteti adauga una sau mai multe adrese de livrare pentru viitoarele
        comenzi. De asemenea puteti adauga datele unor firme in cazul in care doriti facturarea pe firma a comenzilor.
    </p>
    <p>
        In sectiunea <b>Schimbare parola</b> puteti schimba parola pentru contul Dvs, in cazul in care considerati ca este
        nesigura. Va trebui sa introduceti parola curenta iar apoi noua parola pentru resetare.
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.user.cpanel.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/front/user/cpanel/info.blade.php ENDPATH**/ ?>