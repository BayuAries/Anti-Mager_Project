<?php $__env->startSection('content'); ?>


<div class="row no-gutters justify-content-between">

    <!--left side: bagian daftar wisata-->
    <div class="card col-8 mr-2 row no-gutters">

        <!--header-->
        <h4 class="card-header p-2">EVENT TERBARU</h3>

        <!--body-->
        <div class="card-body p-2">

            <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3" style="max-width: 750px">

                <div class="row no-gutters p-2">

                    <div class="col-4 mr-3">
                        <?php if($data->foto_event): ?>
                        <img class="card-img" src="/images/foto_event/<?php echo e($data->foto_event); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="col-6">
                        <a href="/show-event/<?php echo e($data->id); ?>">
                            <h5 class="card-title" style="color: #800000">
                                <strong><?php echo e($data->nama_event); ?></strong>
                            </h5>
                        </a>
                        <p class="card-text"><?php echo e($data->alamat_event); ?> di <strong><?php echo e($data->wisata->nama_wisata); ?> (<?php echo e($data->kota->kota); ?>)</strong></p>
                        <p class="card-text">
                            <strong>Mulai: </strong><?php echo e($data->tanggal_mulai_event); ?>

                        </p>
                        <hr>
                        <p class="card-text">
                            <strong>Harga Tiket Masuk: </strong>
                            <?php if($data->htm_event == "gratis"): ?>
                                <?php echo e($data->htm_event); ?>

                            <?php else: ?>
                                Rp<?php echo e($data->htm_event); ?>

                            <?php endif; ?>
                        </p>
                    </div>

                    <!-- #==================================================
                         #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
                         #================================================== -->
                         
                    <div class="col-2">
                        <a class="btn-sm btn-secondary mt-2" href="/show-event/<?php echo e($data->id); ?>">Beli Tiket</a>
                    </div>

                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <!--right side-->
    <div class="col-3">

        <!--pencarian-->
        <div class="card">
            <!--header-->
            <h4 class="card-header">PENCARIAN</h4>

            <!--body-->
            <div class="card-body">
                <form action="/daftar-event-cari" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input class="form-control" type="text" name="nama_event" placeholder="cari event....">
                    <input class="btn-sm btn-secondary mt-2" type="submit" value="Cari">
                </form>
            </div>

        </div>

        <!--filter-->
        <div class="card mt-2">
            <!--header-->
            <h4 class="card-header">FILTER</h4>
    
            <!--body-->
            <div class="card-body">
                <form action="/daftar-event-filter" method="post">
                    <?php echo e(csrf_field()); ?>

                    <!--pilihan kota-->
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" name="kota">
                            <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nkota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nkota->id); ?>"><?php echo e($nkota->kota); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <!--pilihan hari-->
                    <div class="form-group">
                        <label>Hari: </label><br>
                        <input class="form-control" type="date" name="tanggal">
                    </div>

                    <input class="btn-sm btn-secondary" type="submit" value="Terapkan">
        
                </form>
            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/daftar_event.blade.php ENDPATH**/ ?>