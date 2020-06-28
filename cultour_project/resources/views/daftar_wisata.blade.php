@extends('index')
@section('title', 'Daftar Destinasi Wisata Budaya')
@section('content')

<div class="card-colomns row no-gutters justify-content-between">

    <!--left side: bagian daftar wisata-->
    <div class="card col-8 mr-2 row no-gutters">

        <!--header-->
        <h4 class="card-header p-2">WISATA BUDAYA TERBARU</h3>

        <!--body-->
        <div class="card-body p-2">

            @foreach($wisata as $data)
            <div class="card mt-3" style="max-width: 750px">

                <div class="row no-gutters p-2">

                    <div class="col-4 mr-3">
                        @if($data->foto_wisata)
                        <img class="card-img" src="/images/foto_wisata_budaya/{{$data->foto_wisata}}">
                        @endif
                    </div>

                    <div class="col-7">
                        <a href="/show-wisata/{{ $data->id }}">
                            <h5 class="card-title" style="color: #800000">
                                <strong>{{ $data->nama_wisata }}</strong>
                            </h5>
                        </a>
                        <p class="card-text">{{ $data->alamat_wisata }} di <strong>{{ $data->kota->kota }}</strong></p>
                        <p class="card-text">
                            <strong>Buka Hari: </strong>{{$data->jadwal_wisata}}
                        </p>
                        <hr>
                        <p class="card-text">
                            <strong>Harga Tiket Masuk: </strong>
                            @if($data->htm_wisata == "gratis")
                                {{ $data->htm_wisata }}
                            @else
                                Rp{{ $data->htm_wisata }}
                            @endif
                        </p>
                    </div>

                </div>

            </div>
            @endforeach

        </div>

    </div>

    <!--right side-->
    <div class="col-3">

        <!--pencarian-->
        <div class="card">
            <!--header-->
            <h4 class="card-header">PENCARIAN</h4>
    
            <!--body-->
            <div class="card-body">
                <form action="/daftar-wisata-cari" method="post">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="nama_wisata" placeholder="cari wisata budaya....">
                    <input class="btn-sm btn-secondary mt-2" type="submit" value="Cari">
                </form>
            </div>
        </div>

        <!--filter-->
        <div class="card mt-2">
            <!--header-->
            <h4 class="card-header">FILTER</h4>
    
            <!--body-->
            <div class="card-body"">
                <form action="/daftar-wisata-filter" method="post">
                    {{csrf_field()}}
                    <!--pilihan kota-->
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" name="kota">
                            @foreach($kota as $nkota)
                                <option value="{{ $nkota->id }}">{{ $nkota->kota }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--pilihan hari-->
                    <div class="form-group row no-gutters">
                        <label class="col-12">Hari: </label><br>
                        <div class="col-5">
                            <input type="checkbox" name="hari[]" value="senin"> Senin <br>
                            <input type="checkbox" name="hari[]" value="selasa"> Selasa <br>
                            <input type="checkbox" name="hari[]" value="rabu"> Rabu <br>
                            <input type="checkbox" name="hari[]" value="kamis"> Kamis <br>
                        </div>
                        <div class="col-5">
                            <input type="checkbox" name="hari[]" value="jumat"> Jumat <br>
                            <input type="checkbox" name="hari[]" value="sabtu"> Sabtu <br>
                            <input type="checkbox" name="hari[]" value="minggu"> Minggu <br>
                        </div>
                    </div>

                    <input class="btn-sm btn-secondary" type="submit" value="Terapkan">
        
                </form>
            </div>
        </div>

    </div>


</div>

@endsection