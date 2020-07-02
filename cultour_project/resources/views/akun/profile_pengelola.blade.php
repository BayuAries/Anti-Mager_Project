@extends('index')
@section('content')

<!--profile akun-->
<div class="jumbotron">

    <div class="row no-gutters">

        <div class="col-2">
        @if($pengelola->foto_profile)
            <img class='rounded-circle' src="/images/foto_profile/{{ $pengelola->foto_profile }}"width="150px">
        @else
            <img class='rounded-circle' src="/images/foto_profile/default_profile.png" width="150px">
        @endif
        </div>
    
        <div class="col-10">
            <h3>{{ $pengelola -> nama }}</h3>
            <h5><strong>EMAIL: </strong>{{ $pengelola -> email }}</h5>
            <h5><strong>JENIS AKUN: </strong>{{ $pengelola -> role }}</h5>
            <hr>
            @if(!$pengelola->wisata)
            <a class='btn-sm btn-secondary' href="/register/wisata">Daftarkan Wisata Budaya</a> | 
            @endif
            <a class="btn-sm btn-secondary" href="/profile/pengaturan/{{ Session::get('id') }}">pengaturan</a> | 

            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusAkun">hapus akun</button>
            <div class="modal fade" id="modalHapusAkun" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Hapus Akun</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus akun? Seluruh data termasuk data wisata, event, dan review yang diberikan wisatawan tidak dapat dikembalikan lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            @if(!$pengelola->wisata)
                                <a class="btn btn-danger" href="/hapus-akun-pengelola/{{Session::get('id')}}">Hapus A</a>
                            @else
                                <a class="btn btn-danger" href="/hapus-akun-pengelola/{{Session::get('id')}}/{{ $pengelola->wisata->id }}">Hapus B</a>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


@if($pengelola->wisata)
<!--informasi wisata yang dikelola-->
<div class="card-columns row no-gutters justify-content-between">

    <!--left side: bagian informasi wisata-->
    <div class="card col-8">

        <!--header-->
        <h4 class="card-header">WISATA BUDAYA YANG DIKELOLA</h3>

        <!--body-->
        <div class="card-body">

            @if($pengelola->wisata->foto_wisata)
                <img class="card-img" src="/images/foto_wisata_budaya/{{ $pengelola->wisata->foto_wisata }}">
            @endif

            <hr>

            <h5>
                <strong>{{ $pengelola->wisata->nama_wisata }}</strong>
            </h5>

            <h5>
                {{ $pengelola->wisata->alamat_wisata }} di <strong>({{ $pengelola->wisata->kota->kota }})</strong>
            </h5>

            <h6>
                <strong>Buka Hari: </strong>
                {{ $pengelola->wisata->jadwal_wisata }}
            </h6>

            <h6>
                <strong>Harga Tiket Masuk: </strong>
                @if($pengelola->wisata->htm_wisata == "gratis")
                    {{ $pengelola->wisata->htm_wisata }}
                @else
                    Rp{{ $pengelola->wisata->htm_wisata }}
                @endif
            </h6>

            <h6>
                <strong>Status: </strong>
                {{ $pengelola->wisata->status_wisata }}
            </h6>

            @if($pengelola->wisata->status_wisata == 'ditolak')
                <hr>
                
                <p class='alert alert-danger text-justify'>
                    Wisata budaya anda ditolak. Silahkan sesuaikan kembali data wisata anda di <strong>pengaturan</strong> kemudian mengajukannya kembali. 
                    Penolakan terjadi mungkin karena data-data wisata anda tidak sesuai dengan yang diharapkan atau bahkan anda bukan mendaftarkan wisata budaya.
                </p>

                <button class="btn-sm btn-warning" data-toggle="modal" data-target="#modalAjukanKembali">Mengajukan Kembali</button>
                <div class="modal fade" id="modalAjukanKembali" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Mengajukan Kembali Wisata Budaya</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Pastikan data-data wisata budaya yang anda kelola sudah disesuaikan sebagaimana <strong>Wisata Budaya</strong> semestinya.</p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <a class='btn btn-danger' href="/register-ulang/wisata/{{ $pengelola->wisata->id }}">Mengajukan</a>
                            </div>
                            
                        </div>
                    </div>
                </div>

            @endif

            <hr>

            <!--opsi wisata budaya-->
            <!--opsi wisata budaya: buat event-->
            @if($pengelola->wisata->status_wisata == 'diterima')
            <a class='btn-sm btn-secondary' href="/register/event/{{ $pengelola->wisata->id }}">Buat Event</a> | 
            @endif
            <!--opsi wisata budaya: pengaturan-->
            <a class='btn-sm btn-secondary' href="/profile/pengaturan-wisata/{{ $pengelola->wisata->id }}">Pengaturan</a> | 
            <!--opsi wisata budaya: hapus-->
            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusWisata">Hapus</button>
            <div class="modal fade" id="modalHapusWisata" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Hapus Wisata Budaya</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus wisata budaya yang anda kelola? Seluruh data termasuk data event, dan review yang diberikan wisatawan tidak dapat dikembalikan lagi. Namun anda masih bisa mengajukan wisata budaya lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            <a class='btn btn-danger' href="/hapus-wisata/{{Session::get('id')}}/{{$pengelola->wisata->id}}">Hapus</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <hr>

            <p class="text-justify">
                {{ $pengelola->wisata->deskripsi_wisata }}
            </p>

        </div>

    </div>

    <!--right side: event-->
    <div class="card col-4">

        <h4 class="card-header">EVENT</h4>

        <div class="card-body">

            @foreach($pengelola->wisata->event as $data)
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

                    <hr>

                    <!--opsi event-->
                    <!--opsi event: pengaturan-->
                    <a class='btn-sm btn-secondary' href="/profile/pengaturan-event/{{$data->id}}">Pengaturan</a> | 
                    <!--opsi event: hapus-->
                    <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusEvent{{$data->id}}">Hapus</button>
                    <div class="modal fade" id="modalHapusEvent{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!--bagian header-->
                                <div class="modal-header">
                                    <!--title-->
                                    <h5 class="modal-title" id="modalDayaLabel">Hapus Event</h5>
                                    <!--tombol x-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <!--bagian body-->
                                <div class="modal-body">
                                    <p class="text-center">Apakah anda yakin ingin menghapus event <strong>{{$data->nama_event}}</strong>? Seluruh data tidak dapat dikembalikan lagi. Namun anda masih bisa membuat event lagi.</p>
                                </div>
                                    
                                <!--bagian footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                    <a class='btn btn-danger' href="/hapus-event/{{$data->id}}">Hapus</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach

        </div>

    </div>

    <!-- Laporan Penjualan -->
    <div class='card'>
        <h3 class='card-header'>Penjualan Tiket Event</h3>
    <div class='card-body'>

        <div class="card mt-2">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Event</th>
                  <th scope="col">Jumlah Tiket Terjual</th>
                  <th scope="col">Total Pendapatan</th>
                  <th scope="col">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tiket as $test => $ranjang)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$ranjang->event->nama_event}}</td>
                      <td>{{$ranjang->jumlah}}</td>
                      <td>{{$ranjang->total}}</td>
                      <td>
                          <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-detail/{{ $ranjang->event->id }}">DETAIL</a>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Laporan Penjualan -->
    <div class='card'>
        <h3 class='card-header'>Grafik Penjualan Tiket Event</h3>
        <div class='card-body'>

            <div id="chartPenjualan">
                <!-- chart -->               
            </div>
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
            @foreach($pengelola->wisata->review as $datareview)
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
            
        </div>

    </div>

</div>
@endif


@endsection

@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script type="">
    Highcharts.chart('chartPenjualan', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Laporan Penjualan Tiket Event'
        },
        xAxis: {
            categories: {!!json_encode($kategori)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Banyak Tiket'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tiket Terjual',
            data: {!!json_encode($penjualan)!!}
        }]
});
</script>
@endsection