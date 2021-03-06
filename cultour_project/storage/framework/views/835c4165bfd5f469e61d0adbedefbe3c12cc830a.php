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
            
            <a class="navbar-brand" href="/beranda-admin">CULTOUR Admin</a> | 

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/akun-admin">AKUN USER</a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="/wisata-admin">WISATA BUDAYA</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/event-admin">EVENT</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/pendapatan-admin">PENDAPATAN</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/review-admin">REVIEW</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/logout-admin">LOGOUT</a>
                </li>
                
            </ul>

            <?php if(Session::get('login') == TRUE): ?>
            <?php echo e(Session::get('nama')); ?> [ <?php echo e(Session::get('role')); ?> ]
            <?php endif; ?>

        </nav>

        <div class="container-fluid" style="margin-top: 65px">
            <?php echo $__env->yieldContent('content_admin'); ?>
        </div>

        <br><br><br><br><br><br>

        <footer class='footer'>
            <br>
            <center>
                <span style='color: white'><strong>Find Us on:</strong></span><br>
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
        </footer>

        <script src="assets\js\jquery.js"></script>
        <script src="assets\js\popper.js"></script>
        <script src="assets\js\bootstarp.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/admin/index_admin.blade.php ENDPATH**/ ?>