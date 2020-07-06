@extends('admin/index_admin')
@section('title', 'Daftar Riview')
@section('content_admin')

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR REVIEW</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/review-admin-cari" method="post">
                {{csrf_field()}}

                    <input class="form-control mr-2" type="text" name="nama_akun" placeholder="cari nama....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                    <a class="btn btn-secondary col-1" href="/review-admin">Lihat Semua</a>
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
                    <th>NAMA WISATAWAN</th>
                    <th>KEPADA</th>
                    <th>REVIEW</th>
                    <th>HAPUS?</th>
                </tr>

                @foreach($review as $data)
                <tr>
                    <td>{{ $data->akun_nama }}</td>
                    <td><a href="/show-wisata/{{ $data->wisata->id }}">{{ $data->wisata->nama_wisata }}</a></td>
                    <td>{{ $data->review }}</td>
                    <td>
                        <!--tombol modal-->
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapusAkun{{ $data->id }}">Hapus</button>

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
                                        <p class="text-center">Apakah anda akan menghapus review dari <strong>{{ $data->akun_nama }}</strong> ?</p>
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        <a class="btn btn-danger" href="/hapus-review-admin/{{ $data->id }}">Hapus</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
                @endforeach

            </table>

            <div class='row no-gutters justify-content-center'>                
                    {{$review->links()}}
            </div>

        </div>

    </div>

</div>


@endsection