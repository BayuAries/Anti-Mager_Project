@extends('index')
@section('content')

<div class="jumbotron">

    <div class="row no-gutters">

        <div class="col-2">
        @if($wisatawan->foto_profile)
            <img class='rounded-circle' src="/images/foto_profile/{{ $wisatawan->foto_profile }}"width="150px">
        @else
            <img class='rounded-circle' src="/images/foto_profile/default_profile.png" width="150px">
        @endif
        </div>
    
        <div class="col-10">
            <h3>{{ $wisatawan -> nama }}</h3>
            <h5><strong>EMAIL: </strong>{{ $wisatawan -> email }}</h5>
            <h5><strong>JENIS AKUN: </strong>{{ $wisatawan -> role }}</h5>
            <hr>
            <a class="btn-sm btn-secondary" href="/profile/pengaturan/{{ Session::get('id') }}">pengaturan</a> | 
            <button class="btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusAkun">hapus akun</button>
            <div class="modal fade" id="modalHapusAkun" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!--bagian header-->
                        <div class="modal-header">
                            <!--title-->
                            <h5 class="modal-title" id="modalDayaLabel">Edit Review</h5>
                            <!--tombol x-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!--bagian body-->
                        <div class="modal-body">
                            <p class="text-center">Apakah anda yakin ingin menghapus akun? Seluruh data tidak dapat dikembalikan lagi.</p>
                        </div>
                            
                        <!--bagian footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> | 
                            <a class="btn btn-danger" href="/hapus-akun-wisatawan/{{Session::get('id')}}">Hapus</a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div class='card'>

    <h3 class='card-header'>REVIEW</h3>

    <div class='card-body'>
        
        <ul class="list-unstyled">
        @foreach($wisatawan->review as $data)

            <div class="card mt-2">
                <li class="media my-3 p-2">
                    @if($wisatawan->foto_profile)
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/{{ $wisatawan->foto_profile }}">
                    @else
                        <img class="rounded-circle mr-3" width="100px" src="/images/foto_profile/default_profile.png">
                    @endif
                    <div class="media-body">
                        <h4>kepada: <strong><a href="/show-wisata/{{ $data->wisata->id }}">{{ $data->wisata->nama_wisata }}</a></strong></h4>
                        <p>
                            {{ $data->review }}
                        </p>

                        <hr>

                        <!--tombol pemicu pop up atau modal-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalReview{{$data->id}}">
                            edit
                        </button>

                        <!--modal-->
                        <div class="modal fade" id="modalReview{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                    <!--bagian header-->
                                    <div class="modal-header">
                                        <!--title-->
                                        <h5 class="modal-title" id="modalDayaLabel">Edit Review</h5>
                                        <!--tombol x-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="/review-edit/{{$data->id}}" method="post">
                                        {{csrf_field()}}
                                        <!--bagian body-->
                                        <div class="modal-body">
                                            <!--edit review-->
                                            <textarea class="form-control" name="review" cols="30" rows="4">{{$data->review}}</textarea>
                                        </div>
                                            
                                        <!--bagian footer-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <input class="btn btn-primary" type="submit" value="Simpan">
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div> | 

                        <a class="btn btn-danger" href="/review-hapus/{{$data->id}}">hapus</a>

                    </div>
                </li>
            </div>

        @endforeach
        </ul>

    </div>

</div>

@endsection