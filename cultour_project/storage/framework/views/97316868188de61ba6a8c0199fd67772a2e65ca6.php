<?php $__env->startSection('content'); ?>

<div class='row no-gutters justify-content-center'>

        <div class='card col-6'>

            <h3 class='card-header text-center'>REGISTRASI PENGELOLA</h3>

            <form action="/register/pengelola/store" method="post">
            <?php echo e(csrf_field()); ?>

                <div class='card-body'>

                    <div class='form-group'>
                        <label class='h5'>Nama</label>
                        <input class='form-control' type="text" name="nama" value="<?php echo e(old('nama')); ?>">
                        <?php if(count($errors->get('nama')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('nama'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

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

                    <div class='form-group'>
                        <label class='h5'>Konfirmasi Password</label>
                        <input class='form-control' type="password" name='konfirmasi_password'>
                        <?php if(\Session::has('alert')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('alert')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>

                <div class='card-footer'>

                    <center>
                        <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Registrasi</a>
                    </center>
                    
                    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!--bagian header-->
                                <div class="modal-header">
                                    <!--title-->
                                    <h5 class="modal-title" id="modalDayaLabel">Registrawi Pengelola</h5>
                                    <!--tombol x-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <!--bagian body-->
                                <div class="modal-body">
                                    <p class="text-center">Registrasi sebagai pengelola?</p>
                                </div>
                                    
                                <!--bagian footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                    <input class='btn btn-primary' type="submit" value="Registrasi">
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/akun/register_pengelola.blade.php ENDPATH**/ ?>