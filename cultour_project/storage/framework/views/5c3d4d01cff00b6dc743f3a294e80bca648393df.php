<?php $__env->startSection('content_admin'); ?>

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR EVENT</h5>

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
                    <th>TEMPAT WISATA</th>
                    <th>ALAMAT</th>
                    <th>KOTA</th>
                    <th>STATUS</th>
                    <th>OPSI</th>
                </tr>

                <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->nama_event); ?></td>
                    <td><a href="/show-wisata/<?php echo e($data->wisata_id); ?>"><?php echo e($data->wisata->nama_wisata); ?></a></td>
                    <td><?php echo e($data->wisata->alamat_wisata); ?></td>
                    <td><?php echo e($data->kota->kota); ?></td>
                    <td><?php echo e($data->status_event); ?></td>
                    <td>
                        <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-event/<?php echo e($data->id); ?>">BUKA</a> | 

                        <!--tombol modal-->
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusAkun<?php echo e($data->id); ?>">HAPUS</button>

                        <!--bagian modul-->
                        <div class="modal fade" id="modalHapusAkun<?php echo e($data->id); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!--bagian header-->
                                    <div class="modal-header">
                                        <h5>Konfirmasi</h5>
                                        <button class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>

                                    <!--bagian body-->
                                    <div class="modal-body">
                                        <p class="text-center">Apakah anda akan menghapus event <strong><?php echo e($data->nama_event); ?></strong> ?</p>
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        <a class="btn btn-danger" href="/hapus-event-admin/<?php echo e($data->id); ?>">Hapus</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

            <div class='row no-gutters justify-content-center'>                
                    <?php echo e($event->links()); ?>

            </div>

        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/admin/event_admin.blade.php ENDPATH**/ ?>