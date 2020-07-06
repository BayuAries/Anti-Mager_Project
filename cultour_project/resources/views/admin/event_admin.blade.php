@extends('admin/index_admin')
@section('title', 'Daftar Event')
@section('content_admin')

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR EVENT</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/event-admin-cari" method="post">
                {{csrf_field()}}

                    <select class="form-control mr-2" name="status_event">

                        <option value="semua">Semua</option>

                        <option value="belum mulai">Belum mulai</option>

                        <option value="sedang berlangsung">Sedang berlangsung</option>

                        <option value="selesai">Selesai</option>

                    </select>

                    <input class="form-control mr-2" type="text" name="nama_event" placeholder="cari nama event....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                    <a class="btn btn-secondary col-1" href="/event-admin">Lihat Semua</a>
                </div>

            <br>

            @if(Session::has('alert'))
                <div class="alert alert-info">
                        {{ Session::get('alert') }}
                </div>
            @endif

            <br>

            <table class="table">
                <tr>
                    <th>NAMA EVENT</th>
                    <th>TEMPAT WISATA</th>
                    <th>ALAMAT</th>
                    <th>KOTA</th>
                    <th>STATUS</th>
                    <th>OPSI</th>
                </tr>

                @foreach($event as $data)
                <tr>
                    <td>{{ $data->nama_event }}</td>
                    <td><a href="/show-wisata/{{ $data->wisata_id }}">{{ $data->wisata->nama_wisata }}</a></td>
                    <td>{{ $data->wisata->alamat_wisata }}</td>
                    <td>{{ $data->kota->kota }}</td>
                    <td>{{ $data->status_event }}</td>
                    <td>
                        <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-event/{{ $data->id }}">BUKA</a> | 

                        <!--tombol modal-->
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusAkun{{ $data->id }}">HAPUS</button>

                        <!--bagian modul-->
                        <div class="modal fade" id="modalHapusAkun{{ $data->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!--bagian header-->
                                    <div class="modal-header">
                                        <h5>Konfirmasi</h5>
                                        <button class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>

                                    <!--bagian body-->
                                    <div class="modal-body">
                                        <p class="text-center">Apakah anda akan menghapus event <strong>{{ $data->nama_event }}</strong> ?</p>
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        <a class="btn btn-danger" href="/hapus-event-admin/{{ $data->id }}">Hapus</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>

            <div class='row no-gutters justify-content-center'>                
                    {{$event->links()}}
            </div>

        </div>

    </div>

</div>


@endsection