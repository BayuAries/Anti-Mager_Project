<?php $__env->startSection('content'); ?>

<div class='row no-gutters justify-content-center'>
    <div class='card col-12'>

        <h3 class='card-header text-center'>Buat Event</h3>

        <form action="/register/event/store/<?php echo e($wisata->id); ?>" method="post" enctype='multipart/form-data'>
        <?php echo e(csrf_field()); ?>


            <div class='card-body'>

                <div class='form-row'>

                    <div class='form-group col-6'>
                        <label class='h5'>Nama Event <strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name="nama_event">
                    </div>

                    <div class='form-group col-6'>
                        <label class='h5 text-left'>Foto Event</label>
                        <input class='form-control' type="file" name="foto_event">
                    </div>

                </div>

                <div class='form-group'>
                    <label class='h5'>Deskripsi <strong class='align-text-top'>*</strong></label>
                    <textarea class='form-control' name="deskripsi_event" cols="30" rows="10"></textarea>
                </div>

                <div class='form-row'>

                    <div class='form-group col-3'>
                        <label class='h5'>Mulai <strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="date" name="tanggal_mulai_event">
                    </div>

                    <div class='form-group col-3'>
                        <label class='h5'>Selesai</label>
                        <input class='form-control' type="date" name="tanggal_selesai_event">
                    </div>

                    <div class='form-group col-3'>
                        <label class='h5'>Harga Tiket Masuk <span class='small'>*kosongkan bila gratis</span></label>
                        <input class='form-control' type="text" name="htm_event">
                    </div>

                    <div class='form-group col-3'>
                        <label class='h5'>Jumlah Kuota <span class='small'>*kosongkan bila tidak ada</span></label>
                        <input class='form-control' type="int" name="kuota">
                    </div>

                </div>

            </div>

            <div class='card-footer'>

                <center>
                    <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Buat Event</a>
                </center>
                
                <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Buat Event</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Anda yakin ini membuat event ini?</p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <input class='btn btn-primary' type="submit" value="Buat Event">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/register_event.blade.php ENDPATH**/ ?>