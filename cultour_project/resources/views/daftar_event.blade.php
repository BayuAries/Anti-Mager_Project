@extends('index')
@section('content')


<div class="row no-gutters justify-content-between">

    <!--left side: bagian daftar wisata-->
    <div class="card col-8 mr-2 row no-gutters">

        <!--header-->
        <h4 class="card-header p-2">EVENT TERBARU</h3>

        <!--body-->
        <div class="card-body p-2">

            @foreach($event as $data)
            <div class="card mt-3" style="max-width: 750px">

                <div class="row no-gutters p-2">

                    <div class="col-4 mr-3">
                        @if($data->foto_event)
                        <img class="card-img" src="/images/foto_event/{{$data->foto_event}}">
                        @endif
                    </div>

                    <div class="col-6">
                        <a href="/show-event/{{ $data->id }}">
                            <h5 class="card-title" style="color: #9a1750">
                                <strong>{{ $data->nama_event }}</strong>
                            </h5>
                        </a>
                        <p class="card-text">{{ $data->alamat_event }} di <strong>{{ $data->wisata->nama_wisata }} ({{ $data->kota->kota }})</strong></p>
                        <p class="card-text">
                            <strong>Mulai: </strong>{{$data->tanggal_mulai_event}}
                        </p>
                        <hr>
                        <p class="card-text">
                            <strong>Harga Tiket Masuk: </strong>
                            @if($data->htm_event == "gratis")
                                {{ $data->htm_event }}
                            @else
                                Rp{{ $data->htm_event }}
                            @endif
                        </p>
                    </div>

                    <!-- #==================================================
                         #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
                         #================================================== -->
                         
                    <div class="col-2">
                        <a class="btn-sm btn-secondary mt-2" href="/show-event/{{ $data->id }}">Beli Tiket</a>
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
                <form action="/daftar-event-cari" method="post">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="nama_event" placeholder="cari event....">
                    <input class="btn-sm btn-secondary mt-2" type="submit" value="Cari">
                </form>
            </div>

        </div>

        <!--filter-->
        <div class="card mt-2">
            <!--header-->
            <h4 class="card-header">FILTER</h4>
    
            <!--body-->
            <div class="card-body">
                <form action="/daftar-event-filter" method="post">
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
                    <div class="form-group">
                        <label>Hari: </label><br>
                        <input class="form-control" type="date" name="tanggal">
                    </div>

                    <input class="btn-sm btn-secondary" type="submit" value="Terapkan">
        
                </form>
            </div>
        </div>

    </div>

</div>

@endsection