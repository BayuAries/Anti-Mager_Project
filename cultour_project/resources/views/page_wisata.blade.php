@extends('index')
@section('content')

<div class="card-columns row no-gutters justify-content-between">

    <!--left side: bagian informasi wisata-->
    <div class="card col-8">

        <!--header-->
        <h4 class="card-header text-uppercase">{{ $wisata->nama_wisata }}</h3>

        <!--body-->
        <div class="card-body">

            @if($wisata->foto_wisata)
                <img class="card-img" src="/images/foto_wisata_budaya/{{ $wisata->foto_wisata }}">
            @endif

            <hr>

            <h5>
                {{ $wisata->alamat_wisata }} di <strong>({{ $wisata->kota->kota }})</strong>
            </h5>

            <h6>
                <strong>Buka Hari: </strong>
                {{ $wisata->jadwal_wisata }}
            </h6>

            <h6>
                <strong>Harga Tiket Masuk: </strong>
                @if($wisata->htm_wisata == "gratis")
                    {{ $wisata->htm_wisata }}
                @else
                    Rp{{ $wisata->htm_wisata }}
                @endif
            </h6>

            <!--verifikasi admin-->
            @if(Session::get('role') == "admin"  && $wisata->status_wisata == "ditunda")
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
                                            <p class="text-center">Terima <strong>{{ $wisata->nama_wisata }}</strong>?</p>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                            <a class="btn btn-primary" href="/terima-wisata/{{ $wisata->id }}">Terima</a>
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
                                            <p class="text-center">Tolak <strong>{{ $wisata->nama_wisata }}</strong>?</p>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                            <a class="btn btn-danger" href="/tolak-wisata/{{ $wisata->id }}">Tolak</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </center>
                    
                </div>
            @endif

            <hr>

            <p class="text-justify">
                {{ $wisata->deskripsi_wisata }}
            </p>

        </div>

    </div>

    <!--right side: event-->
    <div class="card col-3">

        <h4 class="card-header">EVENT</h4>

        <div class="card-body">

            @foreach($event as $data)
            <div class="card mt-3">

                @if($data->foto_event)
                    <img class="card-img-top" src="/images/foto_event/{{ $data->foto_event }}">
                @endif

                <div class="card-body">

                    <h6><a href="/show-event/{{ $data->id }}"><strong>{{ $data->nama_event }}</strong></a></h6>

                    <h6>
                        <strong>Mulai: </strong>
                        {{ $data->tanggal_mulai_event }}
                    </h6>

                    <h6>
                        <strong>HTM: </strong>
                        @if($data->htm_event == "gratis")
                            {{ $data->htm_event }}
                        @else
                            Rp{{ $data->htm_event }}
                        @endif
                    </h6>

                </div>

            </div>
            @endforeach

        </div>

    </div>


    <!--review-->
    <div class='card col-12'>

        <h5 class='card-header'>Review</h5>

        <div class='card-body'>

            <!--form review: khusus wisatawan-->
            @if(Session::get('role')  == "wisatawan")
            <form action="/review/store" method="post">
                {{csrf_field()}}
                <input type="hidden" name="wisata_id" value="{{ $wisata->id }}">
                <input type="hidden" name="akun_id" value="{{ Session::get('id') }}">
                <input type="hidden" name="akun_nama" value="{{ Session::get('nama') }}">

                <div class="form-inline">
                    <textarea class="form-control mr-5" style="width: 50%" name="review" id="" cols="50" rows="5"></textarea>
                    <input class="btn btn-primary" class type="submit" value="Kirim">
                </div>
            </form>
            @endif

            <!--menampilkan review-->
            <ul class="list-unstyled">
            @foreach($review as $datareview)
                <hr>
                <li class="media my-3 p-2">
                @if($datareview->akun)
                    @if($datareview->akun->foto_profile)
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/{{ $datareview->akun->foto_profile }}">
                    @else
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    @endif
                    <div class="media-body">
                        <h4>{{ $datareview->akun_nama }}</h4>
                        <p>
                            {{ $datareview->review }}
                        </p>
                    </div>
                @else
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    <div class="media-body">
                        <h4>{{ $datareview->akun_nama }}</h4>
                        <p>
                            {{ $datareview->review }}
                        </p>
                    </div>
                @endif
                </li>

            @endforeach
            </ul>

            <hr>

            <div class='row no-gutters justify-content-center'>                
                    {{$review->links()}}
            </div>
        </div>

    </div>

</div>

@endsection