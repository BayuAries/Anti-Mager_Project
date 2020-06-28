@extends('index')
@section('title', 'Beranda')
@section('content')

<!--carousel-->
<div class="bd-example">

    <div id="carouselSlide" class="carousel slide" data-ride="carousel">

        <!--bagian curousel-->
        <ol class="carousel-indicators">
            <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSlide" data-slide-to="1"></li>
            <li data-target="#carouselSlide" data-slide-to="2"></li>
        </ol>

        <!--bagian slide-->
        <div class="carousel-inner">

            <!--slide pertama-->
            <div class="carousel-item active">
                <img src="/images/slides/gambar-slide1.png" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>INDONESIA MEMILIKI BUDAYA YANG SANGAT BERAGAM DI SETIAP DAERAHNYA</h1>
                </div>
            </div>

            <!--slide kedua-->
            <div class="carousel-item">
                <img src="/images/slides/gambar-slide2.png" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>MEGAHNYA PURA LEMPUYANGAN BALI</h1>
                </div>
            </div>

            <!--slide ketiga-->
            <div class="carousel-item">
                <img src="/images/slides/gambar-slide3.png" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>PERTUNJUKAN WAYANG KULIT</h1>
                </div>
            </div>

            <!--panah slide-->
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="sr-only"></span>
            </a>

        </div>

    </div>

</div>

<br><hr><br>

<!--about-->
<div class='text-center'>

    <h2><strong>TENTANG CULTOUR</strong></h2>

    <br>

    <h3>
        Website yang memudahkan <strong>wisatawan</strong> mencari informasi destinasi wisata budaya dan 
        <strong>pengelola</strong> untuk mempromosikan wisata budaya yang dikelolanya.
    </h3>

    <br>

    <div class='row no-gutters justify-content-center'>
        <a class='btn btn-info col-3 mr-5' href="/daftar-wisata">Temukan Destinasi Wisata Budaya</a>
        <a class='btn btn-info col-3 ml-5' href="/daftar-event">Temukan Event Budaya</a>
    </div>
    
</div>

<br><hr><br>

<!--random wisata-->
<div class=' jumbotron row no-gutters justify-content-center'>

    <h3 class='col-12 text-center'>WISATA BUDAYA</h3>
    
    <br>

    @foreach($wisata as $nwisata)
        @if($nwisata->foto_wisata)
            <a href="/show-wisata/{{ $nwisata->id }}">
                <img class='img-thumbnail mr-5 mt-2' src="/images/foto_wisata_budaya/{{ $nwisata->foto_wisata }}" style='max-height: 170px'>
                <br>
            </a>
        @endif
    @endforeach

</div>

<hr><br>

<!--for pengelola if you want to register-->
<div class='text-center'>

    <h2><strong>DAFTARKAN WISATA BUDAYA</strong></h2>

    <br>

    <h4>
        Halo para <strong>pengelola</strong> wisata budaya! 
        Segera daftarkan wisata budaya yang kamu kelola di sini agar bisa dilihat orang-orang. 
        Resgistrasi sebagai <strong>pengelola</strong>, kemudian daftarkan wisata budayamu dan tunggu konfirmasi dari admin kami.
        Setelah itu orang-orang bisa melihat wisata budaya yang kamu kelola.
    </h4>

    
</div>

<br><hr><br>

<!--random event-->
<div class=' jumbotron row no-gutters justify-content-center'>

    <h3 class='col-12 text-center'>EVENT BUDAYA</h3>
    
    <br>

    @foreach($event as $nevent)
        @if($nevent->foto_event)
            <a href="/show-event/{{ $nevent->id }}">
                <img class='img-thumbnail mr-5 mt-2' src="/images/foto_event/{{ $nevent->foto_event }}" style='max-height: 170px'>
                <br>
            </a>
        @endif
    @endforeach

</div>

<br><br><br>

@endsection