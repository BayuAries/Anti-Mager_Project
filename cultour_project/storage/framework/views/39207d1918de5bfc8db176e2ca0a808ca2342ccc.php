<?php $__env->startSection('title', 'Profile Wisatawan'); ?>
<?php $__env->startSection('content'); ?>

<div class="jumbotron">

    <div class="row no-gutters">

        <div class="col-2">
        <?php if($wisatawan->foto_profile): ?>
            <img class='rounded-circle' src="/images/foto_profile/<?php echo e($wisatawan->foto_profile); ?>"width="150px">
        <?php else: ?>
            <img class='rounded-circle' src="/images/foto_profile/default_profile.png" width="150px">
        <?php endif; ?>
        </div>
    
        <div class="col-10">
            <h3><?php echo e($wisatawan -> nama); ?></h3>
            <h5><strong>EMAIL: </strong><?php echo e($wisatawan -> email); ?></h5>
            <h5><strong>JENIS AKUN: </strong><?php echo e($wisatawan -> role); ?></h5>
            <hr>
            <a class="btn-sm btn-secondary" href="/profile/pengaturan/<?php echo e(Session::get('id')); ?>">pengaturan</a> | 
            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusAkun">hapus akun</button>
            <div class="modal fade" id="modalHapusAkun" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Edit Review</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus akun? Seluruh data tidak dapat dikembalikan lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            <a class="btn btn-danger" href="/hapus-akun-wisatawan/<?php echo e(Session::get('id')); ?>">Hapus</a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div class='card'>
        <h3 class='card-header'>Keranjang Belanja</h3>
    <div class='card-body'>

            <div class="card mt-2">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Event</th>
                      <th scope="col">Jumlah Tiket</th>
                      <th scope="col">Total Bayar</th>
                      <th scope="col">Status</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $wisatawan->tiket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ranjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($loop->iteration); ?></th>
                      <td><?php echo e($ranjang->event->nama_event); ?></td>
                      <td><?php echo e($ranjang->jumlah_tiket); ?></td>
                      <td><?php echo e($ranjang->total_bayar); ?></td>
                      <td><?php echo e($ranjang->status); ?></td>
                      <td>
                          <!--tombol buka detail tiket-->
                        <a class="btn btn-primary" href="/keranjang-detail/<?php echo e($ranjang->id); ?>">DETAIL</a>
                      </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <div class="col-lg-12">
                  <?php if(session('status')): ?>
                      <div class="alert alert-success my-3">
                          <?php echo e(session('status')); ?>

                      </div>
                  <?php endif; ?>
                </div>
            </div>

    </div>
</div>


<div class='card mt-4'>

    <h3 class='card-header'>REVIEW</h3>

    <div class='card-body'>
        
        <ul class="list-unstyled">
        <?php $__currentLoopData = $wisatawan->review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card mt-2">
                <li class="media my-3 p-2">
                    <?php if($wisatawan->foto_profile): ?>
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/<?php echo e($wisatawan->foto_profile); ?>">
                    <?php else: ?>
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    <?php endif; ?>
                    <div class="media-body">
                        <h4>kepada: <strong><a href="/show-wisata/<?php echo e($data->wisata->id); ?>"><?php echo e($data->wisata->nama_wisata); ?></a></strong></h4>
                        <p>
                            <?php echo e($data->review); ?>

                        </p>

                        <hr>

                        <!--tombol pemicu pop up atau modal-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalReview<?php echo e($data->id); ?>">
                            edit
                        </button>

                        <!--modal-->
                        <div class="modal fade" id="modalReview<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <!--bagian header-->
                                    <div class="modal-header">
                                        <!--title-->
                                        <h5 class="modal-title" id="modalDayaLabel">Edit Review</h5>
                                        <!--tombol x-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="/review-edit/<?php echo e($data->id); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <!--bagian body-->
                                        <div class="modal-body">
                                            <!--edit review-->
                                            <textarea class="form-control" name="review" cols="30" rows="4"><?php echo e($data->review); ?></textarea>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-primary" type="submit" value="Simpan">
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div> | 

                        <a class="btn btn-danger" href="/review-hapus/<?php echo e($data->id); ?>">hapus</a>

                    </div>
                </li>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/profile_wisatawan.blade.php ENDPATH**/ ?>