@extends('index')
@section('content')

<center>
    <div class="card" style="max-width: 750px">

        <div class="card-header">
            <h1 class="card-title">PENGATURAN EVENT</h1>
        </div>
        
        <form action="/event-update/{{$event->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

            <div class="card-body">

                <!--TABS NAVS - Trigger-->
                <nav class="nav nav-tabs">
                    <a href="#nav-foto" class="nav-item nav-link active" data-toggle="tab">FOTO</a>
                    <a href="#nav-info" class="nav-item nav-link" data-toggle="tab">INFO</a>
                    <a href="#nav-jw" class="nav-item nav-link" data-toggle="tab">LAIN-LAIN</a>
                </nav>

                <!--NAVS CONTENT-->
                <div class="tab-content">

                    <!--FOTO CONTENT-->
                    <div class="tab-pane fade show active" id="nav-foto" role="tabpanel">
                        <br>

                        @if($event->foto_event)
                            <label for="foto" class="col-3 col-form-label">UBAH FOTO</label>
                            <br>
                            <img src="/images/foto_event/{{ $event->foto_event }}" style='max-width: 500px'>
                        @else
                            <h3>Belum ada foto.</h3>
                        @endif

                        <br><br>

                        <input class='form-control w-50' type="file" name='foto_event'>

                    </div>

                    <!--INFO CONTENT-->
                    <div class="tab-pane fade" id="nav-info" role="tabpanel">
                    <br>

                        <div class='form-row'>
                            <label>NAMA EVENT</label>
                            <input class='form-control' type="text" name="nama_event" value='{{ $event->nama_event }}'>
                        </div>

                        <br>

                        <br>

                        <div class='form-row'>
                            <label>DESKRIPSI</label>
                            <textarea class='form-control' name="deskripsi_event" rows="15">{{ $event->deskripsi_event }}</textarea>
                        </div>

                    </div>

                    <!--LAIN-LAIN CONTENT-->
                    <div class="tab-pane fade" id="nav-jw" role="tabpanel">
                    <br>

                        <div class='row no-gutters justify-content-around'>
                            <div class='form-row col-4'>
                                <label class='mr-2'>Mulai</label>
                                <input class='form-control' type="date" name='tanggal_mulai_event' value='{{ $event->tanggal_mulai_event }}'>
                            </div>
                            <div class='form-row col-4'>
                                <label class='mr-2'>Selesai</label>
                                @if($event->tanggal_selesai_event)
                                    <input class='form-control' type="date" name='tanggal_selesai_event' value='{{ $event->tanggal_selesai_event }}'>
                                @else
                                    <input class='form-control' type="date" name='tanggal_selesai_event'>
                                @endif
                            </div>
                        </div>

                        <br>

                        <div class='row no-gutters justify-content-around'>
                            <div class='form-row col-4'>
                                <label class='mr-2'>HTM <span class='small'>*kosongkan bila gratis</span></label>
                                @if($event->htm_event == 'gratis')
                                    <input class='form-control' type="text" name="htm_event">
                                @else
                                    <input class='form-control' type="text" name="htm_event" value='{{ $event->htm_event }}'>
                                @endif
                                
                            </div>
                            <div class='form-row col-4'>
                                <label class='mr-2'>STATUS</label>
                                    <select class='form-control' name="status_event">
                                        @if($event->status_event == 'belum mulai')
                                            <option value="belum mulai" selected>Belum Mulai</option>
                                            <option value="sedang berlangsung">Sedang Berlangsung</option>
                                            <option value="selesai">Selasai</option>
                                        @elseif($event->status_event == 'sedang berlangsung')
                                            <option value="belum mulai">Belum Mulai</option>
                                            <option value="sedang berlangsung" selected>Sedang Berlangsung</option>
                                            <option value="selesai">Selasai</option>
                                        @elseif($event->status_event == 'selesai')
                                            <option value="belum mulai">Belum Mulai</option>
                                            <option value="sedang berlangsung">Sedang Berlangsung</option>
                                            <option value="selesai" selected>Selasai</option>
                                        @endif
                                    </select>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>

        </form>

    </div>
</center>

@endsection