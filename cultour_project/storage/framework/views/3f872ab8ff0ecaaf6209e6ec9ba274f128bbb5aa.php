<?php $__env->startSection('title', 'Pengaturan Event Budaya'); ?>
<?php $__env->startSection('content'); ?>

<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN EVENT</h1>
        </div>
        
        <form action="/event-update/<?php echo e($event->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-foto" class="nav-item nav-link active" data-toggle="tab">FOTO</a>
                    <a href="#nav-info" class="nav-item nav-link" data-toggle="tab">INFO</a>
                    <a href="#nav-jw" class="nav-item nav-link" data-toggle="tab">LAIN-LAIN</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--FOTO CONTENT-->
                    <div class="tab-pane fade show active" id="nav-foto" role="tabpanel">
                        <br>

                        <?php if($event->foto_event): ?>
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO</label>
                            <br>
                            <img src="/images/foto_event/<?php echo e($event->foto_event); ?>" style='max-width: 500px'>
                        <?php else: ?>
                            <h3>Belum ada foto.</h3>
                        <?php endif; ?>

                        <br><br>

                        <input class='form-control w-50' type="file" name='foto_event'>

                    </div>

                    <!--INFO CONTENT-->
                    <div class="tab-pane fade" id="nav-info" role="tabpanel">
                    <br>

                        <div class='form-row'>
                            <label>NAMA EVENT</label>
                            <input class='form-control' type="text" name="nama_event" value='<?php echo e($event->nama_event); ?>'>
                        </div>

                        <br>

                        <br>

                        <div class='form-row'>
                            <label>DESKRIPSI</label>
                            <textarea class='form-control' name="deskripsi_event" rows="15"><?php echo e($event->deskripsi_event); ?></textarea>
                        </div>

                    </div>

                    <!--LAIN-LAIN CONTENT-->
                    <div class="tab-pane fade" id="nav-jw" role="tabpanel">
                    <br>

                        <div class='row no-gutters justify-content-around'>
                            <div class='form-row col-4'>
                                <label class='mr-2'>Mulai</label>
                                <input class='form-control' type="date" name='tanggal_mulai_event' value='<?php echo e($event->tanggal_mulai_event); ?>'>
                            </div>
                            <div class='form-row col-4'>
                                <label class='mr-2'>Selesai</label>
                                <?php if($event->tanggal_selesai_event): ?>
                                    <input class='form-control' type="date" name='tanggal_selesai_event' value='<?php echo e($event->tanggal_selesai_event); ?>'>
                                <?php else: ?>
                                    <input class='form-control' type="date" name='tanggal_selesai_event'>
                                <?php endif; ?>
                            </div>
                        </div>

                        <br>

                        <div class='row no-gutters justify-content-around'>
                            <div class='form-row col-4'>
                                <label class='mr-2'>HTM <span class='small'>*kosongkan bila gratis</span></label>
                                <?php if($event->htm_event == 'gratis'): ?>
                                    <input class='form-control' type="text" name="htm_event">
                                <?php else: ?>
                                    <input class='form-control' type="text" name="htm_event" value='<?php echo e($event->htm_event); ?>'>
                                <?php endif; ?>
                                
                            </div>
                            <div class='form-row col-4'>
                                <label class='mr-2'>STATUS</label>
                                    <select class='form-control' name="status_event">
                                        <?php if($event->status_event == 'belum mulai'): ?>
                                            <option value="belum mulai" selected>Belum Mulai</option>
                                            <option value="sedang berlangsung">Sedang Berlangsung</option>
                                            <option value="selesai">Selasai</option>
                                        <?php elseif($event->status_event == 'sedang berlangsung'): ?>
                                            <option value="belum mulai">Belum Mulai</option>
                                            <option value="sedang berlangsung" selected>Sedang Berlangsung</option>
                                            <option value="selesai">Selasai</option>
                                        <?php elseif($event->status_event == 'selesai'): ?>
                                            <option value="belum mulai">Belum Mulai</option>
                                            <option value="sedang berlangsung">Sedang Berlangsung</option>
                                            <option value="selesai" selected>Selasai</option>
                                        <?php endif; ?>
                                    </select>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\library data koding\Anti-Mager_Project\cultour_project\resources\views/akun/pengaturan_event.blade.php ENDPATH**/ ?>