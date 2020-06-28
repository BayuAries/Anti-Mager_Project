<?php $__env->startSection('content'); ?>

<div class="card-columns row no-gutters justify-content-between">

    <!--left side: bagian informasi wisata-->
    <div class="card col-8">

        <!--header-->
        <h4 class="card-header text-uppercase"><?php echo e($wisata->nama_wisata); ?></h3>

        <!--body-->
        <div class="card-body">

            <?php if($wisata->foto_wisata): ?>
                <img class="card-img" src="/images/foto_wisata_budaya/<?php echo e($wisata->foto_wisata); ?>">
            <?php endif; ?>

            <hr>

            <h5>
                <?php echo e($wisata->alamat_wisata); ?> di <strong>(<?php echo e($wisata->kota->kota); ?>)</strong>
            </h5>

            <h6>
                <strong>Buka Hari: </strong>
                <?php echo e($wisata->jadwal_wisata); ?>

            </h6>

            <h6>
                <strong>Harga Tiket Masuk: </strong>
                <?php if($wisata->htm_wisata == "gratis"): ?>
                    <?php echo e($wisata->htm_wisata); ?>

                <?php else: ?>
                    Rp<?php echo e($wisata->htm_wisata); ?>

                <?php endif; ?>
            </h6>

            <!--verifikasi admin-->
            <?php if(Session::get('role') == "admin"  && $wisata->status_wisata == "ditunda"): ?>
                <div class='card' style='max-width: 200px'>
                    <center>
                        <h6 class='card-header'><strong>VERFIKASI ADMIN</strong></h6>
                        <div class='card-body'>

                            <!--terima-->
                            <button class="btn-sm btn-primary" data-toggle="modal" data-target="#modalTerima">TERIMA</button>
                            <div class="modal fade" id="modalTerima" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <!--bagian header-->
                                        <div class="modal-header">
                                            <!--title-->
                                            <h5 class="modal-title" id="modalDayaLabel">Konfirmasi</h5>
                                            <!--tombol x-->
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <!--bagian body-->
                                        <div class="modal-body">
                                            <p class="text-center">Terima <strong><?php echo e($wisata->nama_wisata); ?></strong>?</p>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                            <a class="btn btn-primary" href="/terima-wisata/<?php echo e($wisata->id); ?>">Terima</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <!--tolak-->
                            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">TOLAK</button>
                            <div class="modal fade" id="modalTolak" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <!--bagian header-->
                                        <div class="modal-header">
                                            <!--title-->
                                            <h5 class="modal-title" id="modalDayaLabel">Konfirmasi</h5>
                                            <!--tombol x-->
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <!--bagian body-->
                                        <div class="modal-body">
                                            <p class="text-center">Tolak <strong><?php echo e($wisata->nama_wisata); ?></strong>?</p>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                            <a class="btn btn-danger" href="/tolak-wisata/<?php echo e($wisata->id); ?>">Tolak</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </center>
                    
                </div>
            <?php endif; ?>

            <hr>

            <p class="text-justify">
                <?php echo e($wisata->deskripsi_wisata); ?>

            </p>

        </div>

    </div>

    <!--right side: event-->
    <div class="card col-3">

        <h4 class="card-header">EVENT</h4>

        <div class="card-body">

            <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3">

                <?php if($data->foto_event): ?>
                    <img class="card-img-top" src="/images/foto_event/<?php echo e($data->foto_event); ?>">
                <?php endif; ?>

                <div class="card-body">

                    <h6><a href="/show-event/<?php echo e($data->id); ?>"><strong><?php echo e($data->nama_event); ?></strong></a></h6>

                    <h6>
                        <strong>Mulai: </strong>
                        <?php echo e($data->tanggal_mulai_event); ?>

                    </h6>

                    <h6>
                        <strong>HTM: </strong>
                        <?php if($data->htm_event == "gratis"): ?>
                            <?php echo e($data->htm_event); ?>

                        <?php else: ?>
                            Rp<?php echo e($data->htm_event); ?>

                        <?php endif; ?>
                    </h6>

                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>


    <!--review-->
    <div class='card col-12'>

        <h5 class='card-header'>Review</h5>

        <div class='card-body'>

            <!--form review: khusus wisatawan-->
            <?php if(Session::get('role')  == "wisatawan"): ?>
            <form action="/review/store" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="wisata_id" value="<?php echo e($wisata->id); ?>">
                <input type="hidden" name="akun_id" value="<?php echo e(Session::get('id')); ?>">
                <input type="hidden" name="akun_nama" value="<?php echo e(Session::get('nama')); ?>">

                <div class="form-inline">
                    <textarea class="form-control mr-5" style="width: 50%" name="review" id="" cols="50" rows="5"></textarea>
                    <input class="btn btn-primary" class type="submit" value="Kirim">
                </div>
            </form>
            <?php endif; ?>

            <!--menampilkan review-->
            <ul class="list-unstyled">
            <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datareview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr>
                <li class="media my-3 p-2">
                <?php if($datareview->akun): ?>
                    <?php if($datareview->akun->foto_profile): ?>
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/<?php echo e($datareview->akun->foto_profile); ?>">
                    <?php else: ?>
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    <?php endif; ?>
                    <div class="media-body">
                        <h4><?php echo e($datareview->akun_nama); ?></h4>
                        <p>
                            <?php echo e($datareview->review); ?>

                        </p>
                    </div>
                <?php else: ?>
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    <div class="media-body">
                        <h4><?php echo e($datareview->akun_nama); ?></h4>
                        <p>
                            <?php echo e($datareview->review); ?>

                        </p>
                    </div>
                <?php endif; ?>
                </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <hr>

            <div class='row no-gutters justify-content-center'>                
                    <?php echo e($review->links()); ?>

            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\Anti-Mager_Project\cultour_project\resources\views/page_wisata.blade.php ENDPATH**/ ?>