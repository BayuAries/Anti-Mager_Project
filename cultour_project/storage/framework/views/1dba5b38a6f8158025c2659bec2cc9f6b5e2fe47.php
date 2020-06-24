<?php $__env->startSection('content'); ?>

<h3>Pilih Kota Tempat Event</h3>

<div class="row no-gutters justify-content-center">
<?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datakota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card col-2 mr-5 mt-5">

        <img class="card-img" src="/images/foto_kota/bpp.jpg">

        <div class="card-body">

            <a class="card-title text-uppercase text-center" href="/daftar-event/<?php echo e($datakota->id); ?>"><h5 class="justify-content-center"><?php echo e($datakota->kota); ?></></h5>

        </div>

    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datakota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="/daftar-event/<?php echo e($datakota->id); ?>">
    <h4><?php echo e($datakota->kota); ?></h4>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<br><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\_XAMPP\htdocs\tugas-pabw\cultour_project\resources\views/kota_event.blade.php ENDPATH**/ ?>