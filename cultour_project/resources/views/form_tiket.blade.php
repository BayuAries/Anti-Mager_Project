@extends('index')
@section('content')

<!-- #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== -->


<div class='row no-gutters justify-content-center'>
    <div class='card col-12 md-3'>

        <h3 class='card-header text-center'>TIKET EVENT</h3>

        <form action="/beli/tiket/store/{{ $event->id }}" method="post" enctype='multipart/form-data'>
        {{csrf_field()}}

            <div class='card-body'>

                <div class='form-row '>
                    <div class='form-group col-6'>
                        <label class='h5'>Email<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="email" name="email" value="{{ old('email') }}">
                        @if(count($errors->get('email')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('email') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
<!-- 
                    <div class='form-group col-4'>
                        <label class='h5'>No Telephone<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='no_tlp' value="{{ old('no_tlp') }}">
                        @if(count($errors->get('no_tlp')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('no_tlp') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div> -->

                    <div class='form-group col-6'>
                        <label class='h5'>Jumlah Tiket<strong class='align-text-top'>*</strong></label>
                        <input class='form-control' type="text" name='jumlah_tiket' value="{{ old('jumlah_tiket') }}">
                        @if(count($errors->get('jumlah_tiket')) > 0)
                            <ul class='alert alert-danger'>
                                @foreach($errors->get('jumlah_tiket') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                </div>

            </div>

            <div class='card-footer'>

                <center>
                    <a class="btn btn-primary" style='color: white' data-toggle="modal" data-target="#modalKonfirmasi">Bayar</a>
                </center>
                
                <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <!--bagian header-->
                            <div class="modal-header">
                                <!--title-->
                                <h5 class="modal-title" id="modalDayaLabel">Membeli Tiket</h5>
                                <!--tombol x-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <!--bagian body-->
                            <div class="modal-body">
                                <p class="text-center">Ingin Membeli Tiket? </p>
                            </div>
                                
                            <!--bagian footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                                <input class='btn btn-primary' type="submit" value="Beli Tiket">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>


@endsection