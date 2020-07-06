<?php $__env->startSection('title', 'Pengaturan Wisata Budaya'); ?>
<?php $__env->startSection('content'); ?>


<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN WISATA BUDAYA</h1>
        </div>
        
        <form action="/wisata-update/<?php echo e($wisata->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-foto" class="nav-item nav-link active" data-toggle="tab">FOTO</a>
                    <a href="#nav-info" class="nav-item nav-link" data-toggle="tab">INFO</a>
                    <a href="#nav-jw" class="nav-item nav-link" data-toggle="tab">JADWAL & HTM</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--FOTO CONTENT-->
                    <div class="tab-pane fade show active" id="nav-foto" role="tabpanel">
                        <br>

                        <?php if($wisata->foto_wisata): ?>
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO</label>
                            <br>
                            <img src="/images/foto_wisata_budaya/<?php echo e($wisata->foto_wisata); ?>" style='max-width: 500px'>
                        <?php else: ?>
                            <h3>Belum ada foto.</h3>
                        <?php endif; ?>

                        <br><br>

                        <input class='form-control w-50' type="file" name='foto_wisata'>

                    </div>

                    <!--INFO CONTENT-->
                    <div class="tab-pane fade" id="nav-info" role="tabpanel">
                    <br>

                        <div class='form-row'>
                            <label>NAMA WISATA</label>
                            <input class='form-control' type="text" name="nama_wisata" value='<?php echo e($wisata->nama_wisata); ?>'>
                        </div>

                        <br>

                        <div class='form-row'>
                            <label>ALAMAT</label>
                            <textarea class='form-control' name="alamat_wisata" rows="3"><?php echo e($wisata->alamat_wisata); ?></textarea>
                        </div>

                        <br>

                        <div class='form-row'>
                            <label>DESKRIPSI</label>
                            <textarea class='form-control' name="deskripsi_wisata" rows="15"><?php echo e($wisata->deskripsi_wisata); ?></textarea>
                        </div>

                    </div>

                    <!--JADWAL & HTM CONTENT-->
                    <div class="tab-pane fade" id="nav-jw" role="tabpanel">
                    <br>

                        <div>
                            <label class='text-left'>JADWAL</label><br>
                            <label class='small'><strong>Jadwal Sekarang: </strong><?php echo e($wisata->jadwal_wisata); ?></label><br>
                            <div>
                                <input type="checkbox" name="hari[]" value="senin"> Senin 
                                <input type="checkbox" name="hari[]" value="selasa"> Selasa 
                                <input type="checkbox" name="hari[]" value="rabu"> Rabu 
                                <input type="checkbox" name="hari[]" value="kamis"> Kamis 
                                <input type="checkbox" name="hari[]" value="jumat"> Jumat 
                                <input type="checkbox" name="hari[]" value="sabtu"> Sabtu 
                                <input type="checkbox" name="hari[]" value="minggu"> Minggu
                            </div>
                        </div>

                        <br>

                        <div class='row no-gutters justify-content-center'>
                            <label class='mr-3 col-12'>HARGA TIKET MASUK</label>
                            <input class='form-control col-4' type="text" name="htm_wisata">
                        </div>
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

            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/pengaturan_wisata.blade.php ENDPATH**/ ?>