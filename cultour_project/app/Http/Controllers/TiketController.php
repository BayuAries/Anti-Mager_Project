<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Akun;
use App\Wisata;
use App\Event;
use App\Kota;
use App\Review;
use App\Tiket;

class TiketController extends Controller
{
    #==================================================
	#========== B.A.R.U...P.S.I...ANTI-MAGER ==========
	#==================================================

	public function beliTiket($id, $akun_id, Request $req)
    {
        $event = Event::find($id);
        $akun = Akun::find($akun_id);
        //dd($req->all(), $event->htm_event*$req->jumlah_tiket, $akun->id, $id);
        

        // dd($event->sisa_kuota);

        if($event->sisa_kuota >= $req->jumlah_tiket){
            $messages = [
                'required' => ':attribute harap diisi',
                'max' => ':Pembelian maksimal 99 tiket',
                'min'=>'Minimal Pembelian 1 tiket'
            ];
            $this->validate($req,[
                'email' => 'required',
                'jumlah_tiket' => 'required|max:2|min:1',
            ], $messages);

            $tiket = new Tiket();

            $tiket->akun_id = $akun->id;
            $tiket->event_id = $id;
            $tiket->jumlah_tiket = $req->jumlah_tiket;
            $tiket->harga_tiket = $event->htm_event;
            $tiket->total_bayar = $event->htm_event*$req->jumlah_tiket;
            $tiket->status = 'Berhasil dibeli';

            //kurangi kuota sekarang
            $event->sisa_kuota = $event->sisa_kuota - $req->jumlah_tiket;

            $tiket->save();
            $event->save();
            return redirect('/profile/'.$akun->id)->with('status', 'Tiket Berhasil dibeli');
        }elseif ($event->sisa_kuota < $req->jumlah_tiket) {
            return redirect()->back()->with('alert', 'Jumlah kuota tidak mencukupi sisa kuota : '.$event->sisa_kuota);
        }

    }
}
