@extends('admin/index_admin')
@section('content_admin')

<div class='row no-gutters justify-content-center'>

    <div class='card col-12'>

        <h5 class='card-header text-center'>PENDAPATAN PENJUALAN EVENT</h5>

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
                    <th>TOTAL PENJUALAN TIKET</th>
                    <th>TOTAL PENDAPATAN</th>
                    <th>OPSI</th>
                </tr>

                @foreach($tiket as $data)
                <tr>
                    <td>{{$data->event->nama_event}}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->total }}</td>
                    <td>
                        <!--tombol buka wisata budaya-->
                        <a class="btn btn-primary" href="/show-event/{{ $data->event_id }}">BUKA</a>
                    </td>
                </tr>
                @endforeach

            </table>


        </div>

    </div>

</div>


@endsection