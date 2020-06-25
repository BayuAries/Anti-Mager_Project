<?php $__env->startSection('content'); ?>

<div class='row no-gutters justify-content-center'>
    <div class='card col-12'>

        <h3 class='card-header text-center'>TIKET EVENT</h3>

        <form action="/register/wisata/store/<?php echo e(Session::get('id')); ?>" method="post" enctype='multipart/form-data'>
        <?php echo e(csrf_field()); ?>


            <div class='card-body'>

                <div class='form-row'>

                    <div class='form-group col-4'>
                        <label class='h5'>Nama Pemesan<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='nama_pemesan' value="<?php echo e(old('nama_pemesan')); ?>">
                        <?php if(count($errors->get('nama_pemesan')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('nama_pemesan'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>No Telephone<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='no_tlp' value="<?php echo e(old('no_tlp')); ?>">
                        <?php if(count($errors->get('no_tlp')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('no_tlp'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Jumlah Tiket<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='jumlah_tiket' value="<?php echo e(old('jumlah_tiket')); ?>">
                        <?php if(count($errors->get('jumlah_tiket')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('jumlah_tiket'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Harga Tiket Masuk</label>
                        <input class='form-control' type="text" name="htm_event" value="<?php echo e(old('htm_event')); ?>">
                        <label class='small'>*kosongkan bila tidak memiliki biaya masuk</label>
                        <?php if(count($errors->get('htm_event')) > 0): ?>
                            <ul class='alert alert-danger'>
                                <?php $__currentLoopData = $errors->get('htm_event'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

            <div class='card-footer'>

                <center>
                    <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Bayar</a>
                </center>
                
                <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Membeli Tiket</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Ingin Membeli Tiket? </p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <input class='btn btn-primary' type="submit" value="Daftarkan">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/form_tiket.blade.php ENDPATH**/ ?>