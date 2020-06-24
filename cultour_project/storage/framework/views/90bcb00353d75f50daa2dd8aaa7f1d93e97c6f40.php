<?php $__env->startSection('content'); ?>

<br>

<div class='row no-gutters justify-content-center'>

        <div class='card col-6'>

            <h3 class='card-header text-center'>LOGIN</h3>

            <form action="/login-post" method="post">
            <?php echo e(csrf_field()); ?>

                <div class='card-body'>

                    <center>
                    <?php if(\Session::has('alert')): ?>
                        <div class="alert alert-info">
                            <?php echo e(Session::get('alert')); ?>

                        </div>
                    <?php endif; ?>
                    </center>

                    <div class='form-group'>
                        <label class='h5'>Email</label>
                        <input class='form-control' type="email" name="email" value="<?php echo e(old('email')); ?>">
                        <?php if(count($errors->get('email')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group'>
                        <label class='h5'>Password</label>
                        <input class='form-control' type="password" name='password'>
                        <?php if(count($errors->get('password')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    
                </div>

                <div class='card-footer'>
                    <center>
                        <input class="btn btn-primary" type="submit" value="Login">
                    </center>
                </div>

            </form>

        </div>

</div>

<br><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views//akun/login.blade.php ENDPATH**/ ?>