@extends('index')
@section('content')

<!-- #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== -->

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-centered">
      <div class="col-8 col-centered mt-3 ">

        <div class="card mb-3" style="max-width: 750px;">
          <div class="row no-gutters">
            @foreach ($tiket as $data)
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">{{$data->event->nama_event}}</h4>
                <p class="card-text">Kota : {{$data->event->kota->kota}}</p>
                <p class="card-text">Kuota Penjualan Tiket : {{$data->event->kuota}}</p>
                <p class="card-text">Harga : {{$data->event->htm_event}}</p>
                <p class="card-text">Jumlah Tiket Terjual : {{$data->jumlah}}</p>
                <p class="card-text">Pendapatan Bersih : {{$data->total}}</p>
              </div>
              <div class="card-footer bg-white ">
                <a class="btn btn-primary mt-3" href="/profile/{{Session::get('id')}}" role="button">Kembali</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

<!--       <div class="col-md-6 mt-3">
        <div class="card h-90 card mb-12 shadow-sm ">
          <div class="card-body">
            <div id="chartPenjualan"> 
              
            </div>
        </div>
      </div>
    </div> -->

  </div>



@endsection
