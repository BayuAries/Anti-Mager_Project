<?php $__env->startSection('content'); ?>

<!-- #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== -->

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-12 mt-3">
        <div class="card h-90 card mb-12 shadow-sm ">
<!--           <img src="<?php echo e(asset( $data->path )); ?>" height=""  class="card-img-top" alt="gambar"> -->
          <div class="card-body">
            <h5 class="card-title"><?php echo e($data->event->nama_event); ?></h5>
            <p class="card-text">Kota : <?php echo e($data->event->kota->kota); ?></p>
            <p class="card-text">Kuota Penjualan Tiket : <?php echo e($data->event->kuota); ?></p>
            <p class="card-text">Harga : <?php echo e($data->event->htm_event); ?></p>
            <p class="card-text">Jumlah Tiket Terjual : <?php echo e($data->jumlah); ?></p>
            <p class="card-text">Pendapatan Bersih : <?php echo e($data->total); ?></p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <div class="card-footer bg-white ">
            <a class="btn btn-primary mt-3" href="/profile/<?php echo e(Session::get('id')); ?>" role="button">Kembali</a>
          </div>

        </div>
      </div>

    </div>
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/detail_penjualan.blade.php ENDPATH**/ ?>