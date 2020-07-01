@extends('index')
@section('content')

<div class='card'>

    <h3 class='card-header text-uppercase text-center'>{{ $event->nama_event }}</h3>

    <div class='card-body justify-content-center'>

        @if($event->foto_event)
        <center>
            <img class="card-img" style="width: 50%" src="/images/foto_event/{{$event->foto_event}}">
        </center>
        @endif

        <hr>

        <center>
            <h5>
                {{ $event->wisata->alamat_wisata }} di 
                <a href="/show-wisata/{{ $event->wisata_id }}">{{ $event->wisata->nama_wisata }}</a>
                ({{ $event->kota->kota }})
            </h5>

            <h5>
                <strong>Mulai: </strong>
                {{ $event->tanggal_mulai_event }}
            </h5>

            @if($event->tanggal_selesai_event)
            <h5>
                <strong>Sampai: </strong>{{$event->tanggal_selesai_event}}
            </h5>
            @endif

            <h5>
                <strong>Status: </strong>
                {{ $event->status_event }}
            </h5>

            <h5>
                <strong>Harga Tiket Masuk: </strong>
                @if($event->htm_event == "gratis")
                    {{ $event->htm_event }}
                @else
                    Rp{{ $event->htm_event }}
                @endif
            </h5>
            <!-- #==================================================
                 #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
                 #================================================== -->
            <h5>
                @if($event->htm_event == "gratis")
                    Event ini memiliki kuota tidak terbatas
                @else
                    <strong>Sisa Kuota : </strong>
                    @if($event->kuota < 1)
                        Habis
                    @else
                        {{$event->kuota}}
                    @endif
                @endif 
            </h5>
        </center>

        <hr>

        <p class="card-text text-justify">
            {{ $event->deskripsi_event }}
        </p>

        <hr>

    @if(Session::get('login') == TRUE)
        <center>
            @if($event->htm_event == "gratis")
                    <strong>Event ini tidak menjual tiket</strong> 
            @else
                @if($event->kuota >= 1)
                  <div><a class="btn-sm btn-secondary mt-3" href="/form/event/{{$event->id}}">Beli Tiket</a></div>
                @else
                  <div><a class="btn-sm btn-secondary mt-3" href="/habis">Beli Tiket</a></div>
                @endif
            @endif 
            
        </center>

    @else
        <center>
            <strong>Tiket Hanya Dapat dibeli Ketika Anda Telah Mendaftar</strong> 
        </center>    
    @endif  

    </div>


</div>

@endsection