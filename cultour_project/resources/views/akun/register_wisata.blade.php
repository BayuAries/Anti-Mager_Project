@extends('index')
@section('title', 'Registrasi Wisata Budaya')
@section('content')

<div class='row no-gutters justify-content-center'>
    <div class='card col-12'>

        <h3 class='card-header text-center'>MENDAFTARKAN WISATA BUDAYA</h3>

        <form action="/register/wisata/store/{{ Session::get('id') }}" method="post" enctype='multipart/form-data'>
        {{csrf_field()}}

            <div class='card-body'>

                <div class='form-row'>

                    <div class='form-group col-4'>
                        <label class='h5'>Nama Wisata <strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='nama_wisata' value="{{ old('nama_wisata') }}">
                        @if(count($errors->get('nama_wisata')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('nama_wisata') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Kota <strong class='align-text-top'>*</strong></label>
                        <select class='form-control' name="kota">
                            @foreach($kota as $datakota)
                                <option value="{{ $datakota->id }}">{{ $datakota->kota }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Foto Wisata</label>
                        <input class='form-control' type="file" name='foto_wisata' value="{{ old('foto_wisata') }}">
                        @if(count($errors->get('foto_wisata')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('foto_wisata') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>

                <div class='form-group'>
                    <label class='h5'>Alamat <strong class='align-text-top'>*</strong></label>
                    <textarea class='form-control' name="alamat_wisata" rows="3">{{ old('alamat_wisata') }}</textarea>
                    @if(count($errors->get('alamat_wisata')) > 0)
                        <ul class='alert alert-danger'>
                            @foreach($errors->get('alamat_wisata') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class='form-group'>
                    <label class='h5'>Deskripsi <strong class='align-text-top'>*</strong></label>
                    <textarea class='form-control' name="deskripsi_wisata" rows="15">{{ old('deskripsi_wisata') }}</textarea>
                    @if(count($errors->get('deskripsi_wisata')) > 0)
                        <ul class='alert alert-danger'>
                            @foreach($errors->get('deskripsi_wisata') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class='form-row justify-content-center'>

                    <div class='form-group col-4'>
                        <label class='h5'>Jadwal Buka <strong class='align-text-top'>*</strong></label><br>
                        <div class='form-inline'>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harisenin' name='hari[]' value='senin'>
                                <label class="custom-control-label" for='harisenin'>Senin</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='hariselasa' name='hari[]' value='selasa'>
                                <label class="custom-control-label" for='hariselasa'>Selasa</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harirabu' name='hari[]' value='rabu'>
                                <label class="custom-control-label" for='harirabu'>Rabu</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harikamis' name='hari[]' value='kamis'>
                                <label class="custom-control-label" for='harikamis'>kamis</label>
                            </div>
                        </div>
                        <div class='form-inline'>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harijumat' name='hari[]' value='jumat'>
                                <label class="custom-control-label" for='harijumat'>Jumat</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='harisabtu' name='hari[]' value='sabtu'>
                                <label class="custom-control-label" for='harisabtu'>Sabtu</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id='hariminggu' name='hari[]' value='minggu'>
                                <label class="custom-control-label" for='hariminggu'>Minggu</label>
                            </div>
                        </div>
                        @if(count($errors->get('hari')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('hari') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class='form-group col-4'>
                        <label class='h5'>Harga Tiket Masuk</label>
                        <input class='form-control' type="text" name="htm_wisata" value="{{ old('htm_wisata') }}">
                        <label class='small'>*kosongkan bila tidak memiliki biaya masuk</label>
                        @if(count($errors->get('htm_wisata')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('htm_wisata') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>

            </div>

            <div class='card-footer'>

                <center>
                    <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Daftarkan</a>
                </center>
                
                <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Mendaftarkan Wisata Budaya</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Ingin mendaftarkan wisata budaya? </p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <input class='btn btn-primary' type="submit" value="Daftarkan">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>


@endsection