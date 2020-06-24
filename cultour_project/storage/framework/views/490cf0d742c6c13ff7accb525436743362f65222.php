<?php $__env->startSection('content_admin'); ?>

<h3>Daftar Akun Users</h3>

<?php if(Session::has('alert')): ?>
    <div class="alert alert-info">
            <?php echo e(Session::get('alert')); ?>

    </div>
<?php endif; ?>

<br>

<!--filter role-->
<!--<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
        pilih role
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="/akun-users-admin">Semua</a>
        <a class="dropdown-item" href="/akun-users-admin/wisatawan">Wisatawan</a>
        <a class="dropdown-item" href="/akun-users-admin/pengelola">Pengelola</a>
    </div>
</div>-->

<!--pencarian-->
<div class="row no-gutters">

    <form class="form-inline col-10" action="/akun-users-admin-cari" method="post">
    <?php echo e(csrf_field()); ?>


        <select class="form-control mr-2" name="role">

            <option value="semua">Semua</option>

            <option value="wisatawan">Wisatawan</option>

            <option value="pengelola">Pengelola</option>

        </select>

        <input class="form-control mr-2" type="text" name="nama" placeholder="cari nama....">

        <input class="btn btn-secondary mr-2" type="submit" value="Cari">

    </form>

    <a class="btn btn-secondary col-1" href="/akun-users-admin">Lihat Semua</a>
</div>


<br>

<table class="table">
    <tr>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>ROLE</th>
        <th>HAPUS?</th>
    </tr>

    <?php $__currentLoopData = $akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($data->role != "admin"): ?>
    <tr>
        <td><?php echo e($data->nama); ?></td>
        <td><?php echo e($data->email); ?></td>
        <td><?php echo e($data->role); ?></td>
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
                            <?php if($data->role == 'wisatawan'): ?>
                                <p class="text-center">Apakah anda akan menghapus <strong><?php echo e($data->nama); ?> (<?php echo e($data->role); ?>)</strong> ?</p>
                            <?php elseif($data->role == 'pengelola'): ?>
                                <p class="text-center">Apakah anda akan menghapus <strong><?php echo e($data->nama); ?> (<?php echo e($data->role); ?>)</strong> beserta data-data wisatanya?</p>
                            <?php endif; ?>
                        </div>

                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                            <?php if($data->role == 'wisatawan'): ?>
                                <a class="btn btn-danger" href="/hapus-wisatawan-admin/<?php echo e($data->id); ?>">Hapus c</a>
                            <?php elseif($data->role == 'pengelola'): ?>
                                <?php if($data -> wisata): ?>
                                    <a class="btn btn-danger" href="/hapus-pengelola-admin/<?php echo e($data->id); ?>/<?php echo e($data->wisata->id); ?>">Hapus a</a>
                                <?php else: ?>
                                    <a class="btn btn-danger" href="/hapus-pengelola-admin/<?php echo e($data->id); ?>">Hapus b</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\_XAMPP\htdocs\tugas-pabw\cultour_project\resources\views/admin/akun_users_admin.blade.php ENDPATH**/ ?>