<?php $__env->startSection('title', 'Daftar Riview'); ?>
<?php $__env->startSection('content_admin'); ?>

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR REVIEW</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/review-admin-cari" method="post">
                <?php echo e(csrf_field()); ?>


                    <input class="form-control mr-2" type="text" name="nama_akun" placeholder="cari nama....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                    <a class="btn btn-secondary col-1" href="/review-admin">Lihat Semua</a>
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
                    <th>NAMA WISATAWAN</th>
                    <th>KEPADA</th>
                    <th>REVIEW</th>
                    <th>HAPUS?</th>
                </tr>

                <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->akun_nama); ?></td>
                    <td><a href="/show-wisata/<?php echo e($data->wisata->id); ?>"><?php echo e($data->wisata->nama_wisata); ?></a></td>
                    <td><?php echo e($data->review); ?></td>
                    <td>
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
                                        <p class="text-center">Apakah anda akan menghapus review dari <strong><?php echo e($data->akun_nama); ?></strong> ?</p>
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        <a class="btn btn-danger" href="/hapus-review-admin/<?php echo e($data->id); ?>">Hapus</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>

            <div class='row no-gutters justify-content-center'>                
                    <?php echo e($review->links()); ?>

            </div>

        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/admin/review_admin.blade.php ENDPATH**/ ?>