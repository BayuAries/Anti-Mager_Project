@extends('index')
@section('title', 'Detail Pembelian Tiket')
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
            <div class="col-md-12">
              <div class="card-body">
                <h4 class="card-title">{{$tiket->event->nama_event}}</h4>
                <p class="card-text">Jadwal Event : {{$tiket->event->tanggal_mulai_event}}</p>
                <p class="card-text">Jumlah Tiket dibeli : {{$tiket->jumlah_tiket}}</p>
                <p class="card-text">Harga Tiket : {{$tiket->event->htm_event}}</p>
                <p class="card-text">Total Harga Tiket : {{$tiket->total_bayar}}</p>
              </div>
              <div class="card-footer bg-white ">
                <a class="btn btn-primary mt-3" href="/profile/{{Session::get('id')}}" role="button">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>



@endsection
