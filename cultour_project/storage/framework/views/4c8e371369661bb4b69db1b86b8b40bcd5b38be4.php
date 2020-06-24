<?php $__env->startSection('content_admin'); ?>

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR WISATA BUDAYA</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/wisata-admin-cari" method="post">
                <?php echo e(csrf_field()); ?>


                    <select class="form-control mr-2" name="status_wisata">

                        <option value="semua">Semua</option>

                        <option value="ditunda">Ditunda</option>

                        <option value="diterima">Diterima</option>

                        <option value="ditolak">Ditolak</option>

                    </select>

                    <input class="form-control mr-2" type="text" name="nama_wisata" placeholder="cari nama wisata budaya....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                <a class="btn btn-secondary col-1" href="/wisata-admin">Lihat Semua</a>
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
                    <th>NAMA WISATA</th>
                    <th>KOTA</th>
                    <th>ALAMAT</th>
                    <th>STATUS</th>
                    <th>OPSI</th>
                </tr>

                <?php $__currentLoopData = $wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->nama_wisata); ?></td>
                    <td><?php echo e($data->kota->kota); ?></td>
                    <td><?php echo e($data->alamat_wisata); ?></td>
                    <td><?php echo e($data->status_wisata); ?></td>
                    <td>
                        <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-wisata/<?php echo e($data->id); ?>">BUKA</a> | 

                        <!--tombol modal-->
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusAkun<?php echo e($data->id); ?>">Hapus</button>

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
                                        <p class="text-center">Apakah anda akan menghapus <strong><?php echo e($data->nama_wisata); ?></strong> ?</p>
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        <a class="btn btn-danger" href="/hapus-wisata-admin/<?php echo e($data->id); ?>">Hapus</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

            <div class='row no-gutters justify-content-center'>                
                    <?php echo e($wisata->links()); ?>

            </div>

        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cultour_project\resources\views/admin/wisata_admin.blade.php ENDPATH**/ ?>