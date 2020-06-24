<?php $__env->startSection('content'); ?>

<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN AKUN</h1>
        </div>
        
        <form action="/akun-update/<?php echo e(Session::get('id')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-general" class="nav-item nav-link active" data-toggle="tab">UMUM</a>
                    <a href="#nav-password" class="nav-item nav-link" data-toggle="tab">PASSWORD</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--UMUM CONTENT-->
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel">
                    <br>

                    <div class="form-group">
                        <?php if($akun->foto_profile): ?>
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO PROFILE</label>
                            <br>
                            <img class="card-img rounded-circle" src="/images/foto_profile/<?php echo e($akun->foto_profile); ?>" style="max-width: 200px">
                        <?php else: ?>
                            <label for="foto" class="col-3 col-form-label">UPLOAD FOTO PROFILE</label>
                            <br>
                            <img class="card-img rounded-circle" src="/images/foto_profile/default_profile.png" style="max-width: 200px">
                        <?php endif; ?>
                        <br>
                        <br>
                        <input class='form-control w-50' type="file" name="foto_profile">
                    </div>
                    
                    <br>

                    <div class="form-group row">
                        <label for="name" class="col-3 col-form-label">NAMA</label>
                        <input class="col-8 form-control" type="text" name="nama" value="<?php echo e($akun->nama); ?>">
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-3 col-form-label">EMAIL</label>
                        <input class="col-8 form-control" type="email" name="email" value="<?php echo e($akun->email); ?>">
                    </div>

                    </div>

                    <!--PASSWORD CONTENT-->
                    <div class="tab-pane fade" id="nav-password" role="tabpanel">
                    <br>

                        <div class="form-group row">
                            <label for="email" class="col-5 col-form-label">PASSWORD BARU</label>
                            <input class="col-6 form-control" type="password" name="password_baru">
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-5 col-form-label">KONFIRMASI PASSWORD BARU</label>
                            <input class="col-6 form-control" type="password" name="konfirmasi_password_baru">
                        </div>
                        
                        <?php if(\Session::has('konfirmasi')): ?>
                            <div class="alert alert-danger" style="max-width: 500px">
                                <?php echo e(Session::get('konfirmasi')); ?>

                            </div>
                        <?php endif; ?>

                    </div>

                </div>

                <hr>

                <div class="form-group">
                    <?php if(\Session::has('alert')): ?>
                        <div class="alert alert-danger" style="max-width: 300px">
                            <?php echo e(Session::get('alert')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger" style="max-width: 300px">
                            <ul class="list list-unstyled">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <label for="email" class="col-6 col-form-label">MASUKKAN PASSWORD AKUN</label>
                    <input class="col-8 form-control" type="password" name="password_akun">
                </div>
                
            </div>
            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/pengaturan_akun.blade.php ENDPATH**/ ?>