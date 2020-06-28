<?php $__env->startSection('content'); ?>

<div class='row no-gutters justify-content-center'>
    <div class='card col-12'>

        <h3 class='card-header text-center'>MENDAFTARKAN WISATA BUDAYA</h3>

        <form action="/register/wisata/store/<?php echo e(Session::get('id')); ?>" method="post" enctype='multipart/form-data'>
        <?php echo e(csrf_field()); ?>


            <div class='card-body'>

                <div class='form-row'>

                    <div class='form-group col-4'>
                        <label class='h5'>Nama Wisata <strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='nama_wisata' value="<?php echo e(old('nama_wisata')); ?>">
                        <?php if(count($errors->get('nama_wisata')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('nama_wisata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Kota <strong class='align-text-top'>*</strong></label>
                        <select class='form-control' name="kota">
                            <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datakota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($datakota->id); ?>"><?php echo e($datakota->kota); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Foto Wisata</label>
                        <input class='form-control' type="file" name='foto_wisata' value="<?php echo e(old('foto_wisata')); ?>">
                        <?php if(count($errors->get('foto_wisata')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('foto_wisata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                </div>

                <div class='form-group'>
                    <label class='h5'>Alamat <strong class='align-text-top'>*</strong></label>
                    <textarea class='form-control' name="alamat_wisata" rows="3"><?php echo e(old('alamat_wisata')); ?></textarea>
                    <?php if(count($errors->get('alamat_wisata')) > 0): ?>
                        <ul class='alert alert-danger'>
                            <?php $__currentLoopData = $errors->get('alamat_wisata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <div class='form-group'>
                    <label class='h5'>Deskripsi <strong class='align-text-top'>*</strong></label>
                    <textarea class='form-control' name="deskripsi_wisata" rows="15"><?php echo e(old('deskripsi_wisata')); ?></textarea>
                    <?php if(count($errors->get('deskripsi_wisata')) > 0): ?>
                        <ul class='alert alert-danger'>
                            <?php $__currentLoopData = $errors->get('deskripsi_wisata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <div class='form-row justify-content-center'>

                    <div class='form-group col-4'>
                        <label class='h5'>Jadwal Buka <strong class='align-text-top'>*</strong></label><br>
                        <div class='form-inline'>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harisenin' name='hari[]' value='senin'>
                                <label class="custom-control-label" for='harisenin'>Senin</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='hariselasa' name='hari[]' value='selasa'>
                                <label class="custom-control-label" for='hariselasa'>Selasa</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harirabu' name='hari[]' value='rabu'>
                                <label class="custom-control-label" for='harirabu'>Rabu</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harikamis' name='hari[]' value='kamis'>
                                <label class="custom-control-label" for='harikamis'>kamis</label>
                            </div>
                        </div>
                        <div class='form-inline'>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harijumat' name='hari[]' value='jumat'>
                                <label class="custom-control-label" for='harijumat'>Jumat</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harisabtu' name='hari[]' value='sabtu'>
                                <label class="custom-control-label" for='harisabtu'>Sabtu</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='hariminggu' name='hari[]' value='minggu'>
                                <label class="custom-control-label" for='hariminggu'>Minggu</label>
                            </div>
                        </div>
                        <?php if(count($errors->get('hari')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('hari'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Harga Tiket Masuk</label>
                        <input class='form-control' type="text" name="htm_wisata" value="<?php echo e(old('htm_wisata')); ?>">
                        <label class='small'>*kosongkan bila tidak memiliki biaya masuk</label>
                        <?php if(count($errors->get('htm_wisata')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('htm_wisata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

            <div class='card-footer'>

                <center>
                    <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Daftarkan</a>
                </center>
                
                <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Mendaftarkan Wisata Budaya</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Ingin mendaftarkan wisata budaya? </p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <input class='btn btn-primary' type="submit" value="Daftarkan">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/akun/register_wisata.blade.php ENDPATH**/ ?>