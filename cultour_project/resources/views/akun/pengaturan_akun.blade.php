@extends('index')
@section('title', 'Pengaturan Akun')
@section('content')

<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN AKUN</h1>
        </div>
        
        <form action="/akun-update/{{ Session::get('id') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-general" class="nav-item nav-link active" data-toggle="tab">UMUM</a>
                    <a href="#nav-password" class="nav-item nav-link" data-toggle="tab">PASSWORD</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--UMUM CONTENT-->
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel">
                    <br>

                    <div class="form-group">
                        @if($akun->foto_profile)
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO PROFILE</label>
                            <br>
                            <img class="card-img rounded-circle" src="/images/foto_profile/{{ $akun->foto_profile }}" style="max-width: 200px">
                        @else
                            <label for="foto" class="col-3 col-form-label">UPLOAD FOTO PROFILE</label>
                            <br>
                            <img class="card-img rounded-circle" src="/images/foto_profile/default_profile.png" style="max-width: 200px">
                        @endif
                        <br>
                        <br>
                        <input class='form-control w-50' type="file" name="foto_profile">
                    </div>
                    
                    <br>

                    <div class="form-group row">
                        <label for="name" class="col-3 col-form-label">NAMA</label>
                        <input class="col-8 form-control" type="text" name="nama" value="{{ $akun->nama }}">
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-3 col-form-label">EMAIL</label>
                        <input class="col-8 form-control" type="email" name="email" value="{{ $akun->email }}">
                    </div>

                    </div>

                    <!--PASSWORD CONTENT-->
                    <div class="tab-pane fade" id="nav-password" role="tabpanel">
                    <br>

                        <div class="form-group row">
                            <label for="email" class="col-5 col-form-label">PASSWORD BARU</label>
                            <input class="col-6 form-control" type="password" name="password_baru">
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-5 col-form-label">KONFIRMASI PASSWORD BARU</label>
                            <input class="col-6 form-control" type="password" name="konfirmasi_password_baru">
                        </div>
                        
                        @if(\Session::has('konfirmasi'))
                            <div class="alert alert-danger" style="max-width: 500px">
                                {{Session::get('konfirmasi')}}
                            </div>
                        @endif

                    </div>

                </div>

                <hr>

                <div class="form-group">
                    @if(\Session::has('alert'))
                        <div class="alert alert-danger" style="max-width: 300px">
                            {{Session::get('alert')}}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" style="max-width: 300px">
                            <ul class="list list-unstyled">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <label for="email" class="col-6 col-form-label">MASUKKAN PASSWORD AKUN</label>
                    <input class="col-8 form-control" type="password" name="password_akun">
                </div>
                
            </div>
            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

@endsection