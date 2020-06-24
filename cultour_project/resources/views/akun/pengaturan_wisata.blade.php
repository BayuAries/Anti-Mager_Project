@extends('index')
@section('content')


<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN WISATA BUDAYA</h1>
        </div>
        
        <form action="/wisata-update/{{$wisata->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-foto" class="nav-item nav-link active" data-toggle="tab">FOTO</a>
                    <a href="#nav-info" class="nav-item nav-link" data-toggle="tab">INFO</a>
                    <a href="#nav-jw" class="nav-item nav-link" data-toggle="tab">JADWAL & HTM</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--FOTO CONTENT-->
                    <div class="tab-pane fade show active" id="nav-foto" role="tabpanel">
                        <br>

                        @if($wisata->foto_wisata)
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO</label>
                            <br>
                            <img src="/images/foto_wisata_budaya/{{ $wisata->foto_wisata }}" style='max-width: 500px'>
                        @else
                            <h3>Belum ada foto.</h3>
                        @endif

                        <br><br>

                        <input class='form-control w-50' type="file" name='foto_wisata'>

                    </div>

                    <!--INFO CONTENT-->
                    <div class="tab-pane fade" id="nav-info" role="tabpanel">
                    <br>

                        <div class='form-row'>
                            <label>NAMA WISATA</label>
                            <input class='form-control' type="text" name="nama_wisata" value='{{ $wisata->nama_wisata }}'>
                        </div>

                        <br>

                        <div class='form-row'>
                            <label>ALAMAT</label>
                            <textarea class='form-control' name="alamat_wisata" rows="3">{{ $wisata->alamat_wisata }}</textarea>
                        </div>

                        <br>

                        <div class='form-row'>
                            <label>DESKRIPSI</label>
                            <textarea class='form-control' name="deskripsi_wisata" rows="15">{{ $wisata->deskripsi_wisata }}</textarea>
                        </div>

                    </div>

                    <!--JADWAL & HTM CONTENT-->
                    <div class="tab-pane fade" id="nav-jw" role="tabpanel">
                    <br>

                        <div>
                            <label class='text-left'>JADWAL</label><br>
                            <label class='small'><strong>Jadwal Sekarang: </strong>{{ $wisata->jadwal_wisata }}</label><br>
                            <div>
                                <input type="checkbox" name="hari[]" value="senin"> Senin 
                                <input type="checkbox" name="hari[]" value="selasa"> Selasa 
                                <input type="checkbox" name="hari[]" value="rabu"> Rabu 
                                <input type="checkbox" name="hari[]" value="kamis"> Kamis 
                                <input type="checkbox" name="hari[]" value="jumat"> Jumat 
                                <input type="checkbox" name="hari[]" value="sabtu"> Sabtu 
                                <input type="checkbox" name="hari[]" value="minggu"> Minggu
                            </div>
                        </div>

                        <br>

                        <div class='row no-gutters justify-content-center'>
                            <label class='mr-3 col-12'>HARGA TIKET MASUK</label>
                            <input class='form-control col-4' type="text" name="htm_wisata">
                        </div>
                        @if(count($errors->get('htm_wisata')) > 0)
                        <ul class='alert alert-danger'>
                            @foreach($errors->get('htm_wisata') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

                    </div>

                </div>

            </div>

            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

@endsection