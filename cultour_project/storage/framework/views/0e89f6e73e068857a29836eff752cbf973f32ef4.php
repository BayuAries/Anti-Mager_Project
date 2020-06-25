<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="/">
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <img class="navbar-brand" style='width: 50px' src="/images/logo.png">
                    </li>
                    <li class='nav-item mr-3'>
                        <h1 style="color: #e3e2df">CULTOUR</h1>
                    </li>
                    <li class='nav-item'>
                        <h1 style="color: #e3e2df">|</h1>
                    </li>
                </ul>
                </a>

            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/daftar-wisata">DESTINASI</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/daftar-event">EVENT</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="/form_tiket">form TIKET</a>
                </li>

                <?php if(Session::get('login') == TRUE): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">LOGOUT</a>
                </li>
                <?php endif; ?>
            </ul>

            <?php if(Session::get('login') == FALSE): ?>
            <a class="btn btn-primary mr-2" href="/login">LOGIN</a>
            <div class="dropdown dropleft">
                <button class="btn btn-secondary" data-toggle="dropdown">
                    REGISTRASI
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/register/wisatawan">Sebagai Wisatawan</a>
                    <a class="dropdown-item" href="/register/pengelola">Sebagai Pengelola</a>
                    <a class="dropdown-item" href="/register/admin">Sebagai Admin</a>
                </div>
            </div>

            <?php elseif(Session::get('login') == TRUE): ?>

                <?php if(Session::get('role') == 'admin'): ?>
                <div class="navbar-nav">
                    <div class="nav-item">
                        <a class="nav-link" href="/beranda-admin"><?php echo e(Session::get('nama')); ?> [ <?php echo e(Session::get('role')); ?> ]</a>
                    </div>
                </div>
                <?php else: ?>
                <div class="navbar-nav">
                    <div class="nav-item">
                        <a class="nav-link" href="/profile/<?php echo e(Session::get('id')); ?>">
                            <?php echo e(Session::get('nama')); ?>

                            <?php if(Session::get('foto_profile')): ?>
                                <img class="rounded-circle" src="/images/foto_profile/<?php echo e(Session::get('foto_profile')); ?>" width="30px">
                            <?php else: ?>
                                <img src="/images/foto_profile/default_profile.png" width="30px">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

            <?php endif; ?>

        </nav>

        <div class='container-fluid' style="margin-top: 75px">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <br><br><br><br><br><br>

        <div class='footer' style='bottom: 0'>
            <br>
            <center>
                <span style='color: white'><strong>Kunjungi Kami Di:</strong></span><br>
                <span style='color: white'>
                    <a style='color: white' href="#">facebook</a> |
                    <a style='color: white' href="#">twitter</a> |
                    <a style='color: white' href="#">instagaram</a>
                </span>
                <h5 class='mt-4' style='color: white'>
                    Copyright © Anti-Mager
                </h5>
            </center>
            <br>
        </div>

        <script src="assets\js\jquery.js"></script>
        <script src="assets\js\popper.js"></script>
        <script src="assets\js\bootstarp.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/index.blade.php ENDPATH**/ ?>