<?php $__env->startSection('content'); ?>

<!--profile akun-->
<div class="jumbotron">

    <div class="row no-gutters">

        <div class="col-2">
        <?php if($pengelola->foto_profile): ?>
            <img class='rounded-circle' src="/images/foto_profile/<?php echo e($pengelola->foto_profile); ?>"width="150px">
        <?php else: ?>
            <img class='rounded-circle' src="/images/foto_profile/default_profile.png" width="150px">
        <?php endif; ?>
        </div>
    
        <div class="col-10">
            <h3><?php echo e($pengelola -> nama); ?></h3>
            <h5><strong>EMAIL: </strong><?php echo e($pengelola -> email); ?></h5>
            <h5><strong>JENIS AKUN: </strong><?php echo e($pengelola -> role); ?></h5>
            <hr>
            <?php if(!$pengelola->wisata): ?>
            <a class='btn-sm btn-secondary' href="/register/wisata">Daftarkan Wisata Budaya</a> | 
            <?php endif; ?>
            <a class="btn-sm btn-secondary" href="/profile/pengaturan/<?php echo e(Session::get('id')); ?>">pengaturan</a> | 

            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusAkun">hapus akun</button>
            <div class="modal fade" id="modalHapusAkun" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Hapus Akun</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus akun? Seluruh data termasuk data wisata, event, dan review yang diberikan wisatawan tidak dapat dikembalikan lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            <?php if(!$pengelola->wisata): ?>
                                <a class="btn btn-danger" href="/hapus-akun-pengelola/<?php echo e(Session::get('id')); ?>">Hapus A</a>
                            <?php else: ?>
                                <a class="btn btn-danger" href="/hapus-akun-pengelola/<?php echo e(Session::get('id')); ?>/<?php echo e($pengelola->wisata->id); ?>">Hapus B</a>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<?php if($pengelola->wisata): ?>
<!--informasi wisata yang dikelola-->
<div class="card-columns row no-gutters justify-content-between">

    <!--left side: bagian informasi wisata-->
    <div class="card col-7">

        <!--header-->
        <h4 class="card-header">WISATA BUDAYA YANG DIKELOLA</h3>

        <!--body-->
        <div class="card-body">

            <?php if($pengelola->wisata->foto_wisata): ?>
                <img class="card-img" src="/images/foto_wisata_budaya/<?php echo e($pengelola->wisata->foto_wisata); ?>">
            <?php endif; ?>

            <hr>

            <h5>
                <strong><?php echo e($pengelola->wisata->nama_wisata); ?></strong>
            </h5>

            <h5>
                <?php echo e($pengelola->wisata->alamat_wisata); ?> di <strong>(<?php echo e($pengelola->wisata->kota->kota); ?>)</strong>
            </h5>

            <h6>
                <strong>Buka Hari: </strong>
                <?php echo e($pengelola->wisata->jadwal_wisata); ?>

            </h6>

            <h6>
                <strong>Harga Tiket Masuk: </strong>
                <?php if($pengelola->wisata->htm_wisata == "gratis"): ?>
                    <?php echo e($pengelola->wisata->htm_wisata); ?>

                <?php else: ?>
                    Rp<?php echo e($pengelola->wisata->htm_wisata); ?>

                <?php endif; ?>
            </h6>

            <h6>
                <strong>Status: </strong>
                <?php echo e($pengelola->wisata->status_wisata); ?>

            </h6>

            <?php if($pengelola->wisata->status_wisata == 'ditolak'): ?>
                <hr>
                
                <p class='alert alert-danger text-justify'>
                    Wisata budaya anda ditolak. Silahkan sesuaikan kembali data wisata anda di <strong>pengaturan</strong> kemudian mengajukannya kembali. 
                    Penolakan terjadi mungkin karena data-data wisata anda tidak sesuai dengan yang diharapkan atau bahkan anda bukan mendaftarkan wisata budaya.
                </p>

                <button class="btn-sm btn-warning" data-toggle="modal" data-target="#modalAjukanKembali">Mengajukan Kembali</button>
                <div class="modal fade" id="modalAjukanKembali" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Mengajukan Kembali Wisata Budaya</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Pastikan data-data wisata budaya yang anda kelola sudah disesuaikan sebagaimana <strong>Wisata Budaya</strong> semestinya.</p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <a class='btn btn-danger' href="/register-ulang/wisata/<?php echo e($pengelola->wisata->id); ?>">Mengajukan</a>
                            </div>
                            
                        </div>
                    </div>
                </div>

            <?php endif; ?>

            <hr>

            <!--opsi wisata budaya-->
            <!--opsi wisata budaya: buat event-->
            <?php if($pengelola->wisata->status_wisata == 'diterima'): ?>
            <a class='btn-sm btn-secondary' href="/register/event/<?php echo e($pengelola->wisata->id); ?>">Buat Event</a> | 
            <?php endif; ?>
            <!--opsi wisata budaya: pengaturan-->
            <a class='btn-sm btn-secondary' href="/profile/pengaturan-wisata/<?php echo e($pengelola->wisata->id); ?>">Pengaturan</a> | 
            <!--opsi wisata budaya: hapus-->
            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusWisata">Hapus</button>
            <div class="modal fade" id="modalHapusWisata" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Hapus Wisata Budaya</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus wisata budaya yang anda kelola? Seluruh data termasuk data event, dan review yang diberikan wisatawan tidak dapat dikembalikan lagi. Namun anda masih bisa mengajukan wisata budaya lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            <a class='btn btn-danger' href="/hapus-wisata/<?php echo e(Session::get('id')); ?>/<?php echo e($pengelola->wisata->id); ?>">Hapus</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <hr>

            <p class="text-justify">
                <?php echo e($pengelola->wisata->deskripsi_wisata); ?>

            </p>

        </div>

    </div>

    <!--right side: event-->
    <div class="card col-4">

        <h4 class="card-header">EVENT</h4>

        <div class="card-body">

            <?php $__currentLoopData = $pengelola->wisata->event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3"">

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

                    <hr>

                    <!--opsi event-->
                    <!--opsi event: pengaturan-->
                    <a class='btn-sm btn-secondary' href="/profile/pengaturan-event/<?php echo e($data->id); ?>">Pengaturan</a> | 
                    <!--opsi event: hapus-->
                    <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusEvent<?php echo e($data->id); ?>">Hapus</button>
                    <div class="modal fade" id="modalHapusEvent<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!--bagian header-->
                                <div class="modal-header">
                                    <!--title-->
                                    <h5 class="modal-title" id="modalDayaLabel">Hapus Event</h5>
                                    <!--tombol x-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <!--bagian body-->
                                <div class="modal-body">
                                    <p class="text-center">Apakah anda yakin ingin menghapus event <strong><?php echo e($data->nama_event); ?></strong>? Seluruh data tidak dapat dikembalikan lagi. Namun anda masih bisa membuat event lagi.</p>
                                </div>
                                    
                                <!--bagian footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                    <a class='btn btn-danger' href="/hapus-event/<?php echo e($data->id); ?>">Hapus</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <!-- Laporan Penjualan -->
    <div class='card'>
        <h3 class='card-header'>Penjualan Tiket Event</h3>
    <div class='card-body'>

        <div class="card mt-2">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Event</th>
                  <th scope="col">Jumlah Tiket Terjual</th>
                  <th scope="col">Total Pendapatan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test => $ranjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($loop->iteration); ?></th>
                      <td><?php echo e($ranjang->event->nama_event); ?></td>
                      <td><?php echo e($ranjang->jumlah); ?></td>
                      <td><?php echo e($ranjang->total); ?></td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
            </div>
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
            <?php $__currentLoopData = $pengelola->wisata->review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datareview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            
        </div>

    </div>

</div>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/profile_pengelola.blade.php ENDPATH**/ ?>