<?php $__env->startSection('content_admin'); ?>

<h3>Daftar Akun Wisatawan</h3>

<?php if(Session::has('alert')): ?>
    <div class="alert alert-info">
            <?php echo e(Session::get('alert')); ?>

    </div>
<?php endif; ?>

<table class="table">
    <tr>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>HAPUS?</th>
    </tr>

    <?php $__currentLoopData = $akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($data->nama); ?></td>
        <td><?php echo e($data->email); ?></td>
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
                            <p class="text-center">Apakah anda akan menghapus <strong><?php echo e($data->nama); ?></strong> ?</p>
                        </div>

                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                            <a class="btn btn-danger" href="/hapus-wisatawan-admin/<?php echo e($data->id); ?>">Hapus</a>
                        </div>

                    </div>
                </div>
            </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\_XAMPP\htdocs\tugas-pabw\cultour_project\resources\views/admin/akun_wisatawan_admin.blade.php ENDPATH**/ ?>