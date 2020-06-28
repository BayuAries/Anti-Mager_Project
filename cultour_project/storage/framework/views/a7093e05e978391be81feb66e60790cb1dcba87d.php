<?php $__env->startSection('content_admin'); ?>

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h3 class='card-header text-center'>J U D U L</h3>

        <div class='card-body text-center'>

            <h5>Apa yang bisa anda lakukan sebagai admin?</h5>
            <ul class='list list-unstyled'>
                <li>Memeverifikasi wisata budaya.</li>
                <li>Menghapus akun pengguna.</li>
                <li>Menghapus wisata budaya.</li>
                <li>Menghapus event budaya.</li>
                <li>Menghapus review.</li>
            </ul>

            <hr>

            <h5>Catatan</h5>
            <p>Apabila akun pengelola yang memiliki data wisata dihapus, maka data wisata tersebut juga akan terhapus beserta data event dan reviewnya.</p>
            <p>Begitu juga bila menghapus wisata yang memiliki data event dan review, maka data-data tersebut juga akan ikut terhapus.</p>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/admin/beranda_admin.blade.php ENDPATH**/ ?>