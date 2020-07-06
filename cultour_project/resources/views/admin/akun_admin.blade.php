@extends('admin/index_admin')
@section('title', 'Daftar Akun User')
@section('content_admin')

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>DAFTAR AKUN USER</h5>

        <div class='card-body'>

            <!--pencarian-->
            <div class="row no-gutters">

                <form class="form-inline col-10" action="/akun-admin-cari" method="post">
                {{csrf_field()}}

                    <select class="form-control mr-2" name="role">

                        <option value="semua">Semua</option>

                        <option value="wisatawan">Wisatawan</option>

                        <option value="pengelola">Pengelola</option>

                    </select>

                    <input class="form-control mr-2" type="text" name="nama" placeholder="cari nama....">

                    <input class="btn btn-secondary mr-2" type="submit" value="Cari">

                </form>

                <a class="btn btn-secondary col-1" href="/akun-admin">Lihat Semua</a>
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
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th>HAPUS?</th>
                </tr>

                @foreach($akun as $data)
                @if($data->role != "admin")
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->role }}</td>
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
                                        @if($data->role == 'wisatawan')
                                            <p class="text-center">Apakah anda akan menghapus <strong>{{ $data->nama }} ({{ $data->role }})</strong> ?</p>
                                        @elseif($data->role == 'pengelola')
                                            <p class="text-center">Apakah anda akan menghapus <strong>{{ $data->nama }} ({{ $data->role }})</strong> beserta data-data wisatanya?</p>
                                        @endif
                                    </div>

                                    <!--bagian footer-->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button> 
                                        @if($data->role == 'wisatawan')
                                            <a class="btn btn-danger" href="/hapus-wisatawan-admin/{{ $data->id }}">Hapus</a>
                                        @elseif($data->role == 'pengelola')
                                            @if($data -> wisata)
                                                <a class="btn btn-danger" href="/hapus-pengelola-admin/{{ $data->id }}/{{ $data->wisata->id }}">Hapus</a>
                                            @else
                                                <a class="btn btn-danger" href="/hapus-pengelola-admin/{{ $data->id }}">Hapus</a>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endif
                @endforeach

            </table>

            <div class='row no-gutters justify-content-center'>                
                    {{$akun->links()}}
            </div>

        </div>

    </div>

</div>

@endsection