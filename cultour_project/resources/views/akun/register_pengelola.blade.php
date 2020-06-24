@extends('index')
@section('content')

<div class='row no-gutters justify-content-center'>

        <div class='card col-6'>

            <h3 class='card-header text-center'>REGISTRASI PENGELOLA</h3>

            <form action="/register/pengelola/store" method="post">
            {{csrf_field()}}
                <div class='card-body'>

                    <div class='form-group'>
                        <label class='h5'>Nama</label>
                        <input class='form-control' type="text" name="nama" value="{{ old('nama') }}">
                        @if(count($errors->get('nama')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('nama') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class='form-group'>
                        <label class='h5'>Email</label>
                        <input class='form-control' type="email" name="email" value="{{ old('email') }}">
                        @if(count($errors->get('email')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('email') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class='form-group'>
                        <label class='h5'>Password</label>
                        <input class='form-control' type="password" name='password'>
                        @if(count($errors->get('password')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('password') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class='form-group'>
                        <label class='h5'>Konfirmasi Password</label>
                        <input class='form-control' type="password" name='konfirmasi_password'>
                        @if(\Session::has('alert'))
                            <div class="alert alert-danger">
                                {{Session::get('alert')}}
                            </div>
                        @endif
                    </div>
                    
                </div>

                <div class='card-footer'>

                    <center>
                        <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Registrasi</a>
                    </center>
                    
                    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <!--bagian header-->
                                <div class="modal-header">
                                    <!--title-->
                                    <h5 class="modal-title" id="modalDayaLabel">Registrawi Pengelola</h5>
                                    <!--tombol x-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <!--bagian body-->
                                <div class="modal-body">
                                    <p class="text-center">Registrasi sebagai pengelola?</p>
                                </div>
                                    
                                <!--bagian footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                    <input class='btn btn-primary' type="submit" value="Registrasi">
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>

</div>


@endsection