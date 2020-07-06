@extends('index')
@section('title', 'Login')
@section('content')

<br>

<div class='row no-gutters justify-content-center'>

        <div class='card col-6'>

            <h3 class='card-header text-center'>LOGIN</h3>

            <form action="/login-post" method="post">
            {{csrf_field()}}
                <div class='card-body'>

                    <center>
                    @if(\Session::has('alert'))
                        <div class="alert alert-info">
                            {{Session::get('alert')}}
                        </div>
                    @endif
                    </center>

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

                    
                </div>

                <div class='card-footer'>
                    <center>
                        <input class="btn btn-primary" type="submit" value="Login">
                    </center>
                </div>

            </form>

        </div>

</div>

<br><br><br>

@endsection