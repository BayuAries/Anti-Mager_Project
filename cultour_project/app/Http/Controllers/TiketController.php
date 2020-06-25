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

	public function beliTiket($id, Request $req)
    {
        $event = Event::find($id);
        $akun = Akun::where('email','=',$req->email)->get();
        dd($req->all(), $event->htm_event*$req->jumlah_tiket, $akun[0]->id);
    }
}
