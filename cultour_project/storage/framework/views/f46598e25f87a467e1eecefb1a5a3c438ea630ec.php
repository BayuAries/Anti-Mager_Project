<?php $__env->startSection('content'); ?>

<div class='card'>

    <h3 class='card-header text-uppercase text-center'><?php echo e($event->nama_event); ?></h3>

    <div class='card-body justify-content-center'>

        <?php if($event->foto_event): ?>
        <center>
            <img class="card-img" style="width: 50%" src="/images/foto_event/<?php echo e($event->foto_event); ?>">
        </center>
        <?php endif; ?>

        <hr>

        <center>
            <h5>
                <?php echo e($event->wisata->alamat_wisata); ?> di 
                <a href="/show-wisata/<?php echo e($event->wisata_id); ?>"><?php echo e($event->wisata->nama_wisata); ?></a>
                (<?php echo e($event->kota->kota); ?>)
            </h5>

            <h5>
                <strong>Mulai: </strong>
                <?php echo e($event->tanggal_mulai_event); ?>

            </h5>

            <?php if($event->tanggal_selesai_event): ?>
            <h5>
                <strong>Sampai: </strong><?php echo e($event->tanggal_selesai_event); ?>

            </h5>
            <?php endif; ?>

            <h5>
                <strong>Status: </strong>
                <?php echo e($event->status_event); ?>

            </h5>

            <h5>
                <strong>Harga Tiket Masuk: </strong>
                <?php if($event->htm_event == "gratis"): ?>
                    <?php echo e($event->htm_event); ?>

                <?php else: ?>
                    Rp<?php echo e($event->htm_event); ?>

                <?php endif; ?>
            </h5>
        </center>

        <hr>

        <p class="card-text text-justify">
            <?php echo e($event->deskripsi_event); ?>

        </p>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cultour_project\resources\views/page_event.blade.php ENDPATH**/ ?>