@extends('index')
@section('content')

<!-- #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== -->

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @foreach ($tiket as $data)
      <div class="col-md-12 mt-3">
        <div class="card h-90 card mb-12 shadow-sm ">
<!--           <img src="{{asset( $data->path )}}" height=""  class="card-img-top" alt="gambar"> -->
          <div class="card-body">
            <h5 class="card-title">{{$data->event->nama_event}}</h5>
            <p class="card-text">Kota : {{$data->event->kota->kota}}</p>
            <p class="card-text">Kuota Penjualan Tiket : {{$data->event->kuota}}</p>
            <p class="card-text">Harga : {{$data->event->htm_event}}</p>
            <p class="card-text">Jumlah Tiket Terjual : {{$data->jumlah}}</p>
            <p class="card-text">Pendapatan Bersih : {{$data->total}}</p>
          </div>
          @endforeach

          <div class="card-footer bg-white ">
            <a class="btn btn-primary mt-3" href="/profile/{{Session::get('id')}}" role="button">Kembali</a>
          </div>

        </div>
      </div>

    </div>
  </div>



@endsection