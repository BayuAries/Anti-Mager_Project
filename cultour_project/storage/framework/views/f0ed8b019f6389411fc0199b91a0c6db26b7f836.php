<?php $__env->startSection('content_admin'); ?>

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>PENDAPATAN PENJUALAN EVENT</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/event-admin-cari" method="post">
                <?php echo e(csrf_field()); ?>


                    <select class="form-control mr-2" name="status_event">

                        <option value="semua">Semua</option>

                        <option value="belum mulai">Belum mulai</option>

                        <option value="sedang berlangsung">Sedang berlangsung</option>

                        <option value="selesai">Selesai</option>

                    </select>

                    <input class="form-control mr-2" type="text" name="nama_event" placeholder="cari nama event....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                    <a class="btn btn-secondary col-1" href="/event-admin">Lihat Semua</a>
                </div>

            <br>

            <?php if(Session::has('alert')): ?>
                <div class="alert alert-info">
                        <?php echo e(Session::get('alert')); ?>

                </div>
            <?php endif; ?>

            <br>

            <table class="table">
                <tr>
                    <th>NAMA EVENT</th>
                    <th>TOTAL PENJUALAN TIKET</th>
                    <th>TOTAL PENDAPATAN</th>
                    <th>OPSI</th>
                </tr>

                <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->event->nama_event); ?></td>
                    <td><?php echo e($data->jumlah); ?></td>
                    <td><?php echo e($data->total); ?></td>
                    <td>
                        <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-event/<?php echo e($data->event_id); ?>">BUKA</a> | 
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>


        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/admin/pendapatan.blade.php ENDPATH**/ ?>