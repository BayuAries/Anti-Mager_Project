<?php $__env->startSection('title', 'Detail Penjualan Tiket'); ?>
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
            <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title"><?php echo e($data->event->nama_event); ?></h4>
                <p class="card-text">Kota : <?php echo e($data->event->kota->kota); ?></p>
                <p class="card-text">Kuota Penjualan Tiket : <?php echo e($data->event->kuota); ?></p>
                <p class="card-text">Harga : <?php echo e($data->event->htm_event); ?></p>
                <p class="card-text">Jumlah Tiket Terjual : <?php echo e($data->jumlah); ?></p>
                <p class="card-text">Pendapatan Bersih : <?php echo e($data->total); ?></p>
              </div>
              <div class="card-footer bg-white ">
                <a class="btn btn-primary mt-3" href="/profile/<?php echo e(Session::get('id')); ?>" role="button">Kembali</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>

<!--       <div class="col-md-6 mt-3">
        <div class="card h-90 card mb-12 shadow-sm ">
          <div class="card-body">
            <div id="chartPenjualan"> 
              
            </div>
        </div>
      </div>
    </div> -->

  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/detail_penjualan.blade.php ENDPATH**/ ?>