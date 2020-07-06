<?php $__env->startSection('title', 'Detail Pembelian Tiket'); ?>
<?php $__env->startSection('content'); ?>

<!-- #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== -->

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-centered">
      <div class="col-8 col-centered mt-3 ">

        <div class="card mb-3" style="max-width: 750px;">
          <div class="row no-gutters">
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title"><?php echo e($tiket->event->nama_event); ?></h4>
                <p class="card-text">Jadwal Event : <?php echo e($tiket->event->tanggal_mulai_event); ?></p>
                <p class="card-text">Jumlah Tiket dibeli : <?php echo e($tiket->jumlah_tiket); ?></p>
                <p class="card-text">Harga Tiket : <?php echo e($tiket->event->htm_event); ?></p>
                <p class="card-text">Total Harga Tiket : <?php echo e($tiket->total_bayar); ?></p>
              </div>
              <div class="card-footer bg-white ">
                <a class="btn btn-primary mt-3" href="/profile/<?php echo e(Session::get('id')); ?>" role="button">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/detail_pembelian.blade.php ENDPATH**/ ?>