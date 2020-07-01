<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Akun;
use App\Wisata;
use App\Event;
use App\Kota;
use App\Review;
use App\Tiket;

class PageController extends Controller
{
    #menampilkan halaman beranda
    public function showBeranda()
    {
        $wisata = Wisata::where('status_wisata', 'diterima')->get()->random(3);
        $event = Event::all()->random(3);
        return view('beranda', ['wisata'=>$wisata, 'event'=>$event]);
    }

    #menampilkan daftar wisata budaya berdasarkan kota yang dipilih dan dengan status 'diterima'
    public function showDaftarWisata()
    {
        $wisata = Wisata::where('status_wisata', 'diterima')->orderByRaw('created_at DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');

        return view('daftar_wisata', ['wisata'=>$wisata, 'kota'=>$kota]);
    }

    #pencarian wisata budaya
    public function cariWisata(Request $req)
    {
        $wisata = Wisata::where('nama_wisata', 'like', '%'.$req->nama_wisata.'%')->where('status_wisata', 'diterima')->orderByRaw('created_at DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');

        return view('daftar_wisata', ['wisata'=>$wisata, 'kota'=>$kota]);
    }

    #filter wisata budaya
    public function filterWisata(Request $req)
    {
        $skota = $req->kota;

        if($req->hari){
            $jadwal = implode(", ", $req->hari);
        }else{
            $jadwal=null;
        }

        $wisata = Wisata::where('kota_id', $skota)
                        ->where('jadwal_wisata', 'like', '%'.$jadwal.'%')
                        ->where('status_wisata', 'diterima')
                        ->orderByRaw('created_at DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');
        
        return view('daftar_wisata', ['wisata'=>$wisata, 'kota'=>$kota]);
    }

    #menampilkan informasi wisata
    public function showWisata($id)
    {
        $wisata = Wisata::find($id);
        $event = Event::where('wisata_id', $id)->get();
        $review = Review::where('wisata_id', $id)->paginate(10);
        return view('page_wisata',['wisata'=>$wisata, 'event'=>$event, 'review'=>$review]);
    }

    #menampilkan daftar event berdasarkan kota yang dipilih
    public function showDaftarEvent()
    {
        $event = Event::orderBy('created_at', 'DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');
        return view('daftar_event', ['event'=>$event, 'kota'=>$kota]);
    }

    #pencarian event
    public function cariEvent(Request $req)
    {
        $event = Event::where('nama_event', 'like', '%'.$req->nama_event.'%')->orderByRaw('created_at DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');

        return view('daftar_event', ['event'=>$event, 'kota'=>$kota]);
    }

    #filter event
    public function filterEvent(Request $req)
    {
        $sKota = $req->kota;
        $tanggal = $req->tanggal;

        $event = Event::where('kota_id', $sKota)
                        ->where('tanggal_mulai_event', $tanggal)
                        ->orderByRaw('created_at DESC')->paginate(10);
        $kota = Kota::all()->sortBy('kota');

        return view('daftar_event', ['event'=>$event, 'kota'=>$kota]);
    }

    #menampilkan informasi event
    public function showEvent($id)
    {
        $event = Event::find($id);
        return view('page_event', ['event'=>$event]);
    }
    
    #menampilkan halaman login
    public function showLogin()
    {
        return view('/akun/login');
    }

    #menampilkan halaman opsi registrasi
    public function showOpsiRegister()
    {
        return view('akun/register_opsi');
    }

    #menampilkan halaman registrasi wisatawan
    public function showRegisterWisatawan()
    {
        return view('akun/register_wisatawan');
    }

    #menampilkan halaman registrasi pengelola
    public function showRegisterPengelola()
    {
        return view('akun/register_pengelola');
    }

    #menampilkan halaman registrasi wisata budaya
    public function showRegisterWisata()
    {
        $kota = Kota::orderBy('kota')->get();
        return view('akun/register_wisata', ['kota'=>$kota]);
    }

    #menampilkan heleman registrasi event
    public function showRegisterEvent($id)
    {
        $wisata = Wisata::find($id);
        return view('akun/register_event', ['wisata'=>$wisata]);
    }
    
    #menampilkan halaman profile
    public function showProfile($id)
    {
        //EDIT FOR PSI ANTI - MAGER
        if(Session::get('role') == 'wisatawan'){

            $wisatawan = Akun::find($id);
            // $tiket = Tiket::where('akun_id',$id)->get();
            $ev_id = Tiket::whereIn('akun_id',$wisatawan->tiket)->get('event_id');
            $event = Event::select('id','nama_event')->whereIn('id', $ev_id)->get();
            // dd($event); 
            return view('akun/profile_wisatawan',['wisatawan'=>$wisatawan, 'event'=>$event]);

        }elseif(Session::get('role') == 'pengelola'){

            $pengelola = Akun::find($id);
            $event = Event::select('id')->whereIn('wisata_id', $pengelola->wisata->event)->get();
            // $ti = Tiket::groupBy('event_id')->where('event_id', 22)->sum('total_bayar');
            $tiket = Tiket::groupBy('event_id')->selectRaw('event_id ,sum(jumlah_tiket) as jumlah, sum(total_bayar)*0.9 as total')->whereIn('event_id', $event)->get();
            // dd($event,$tiket->all());
            return view('akun/profile_pengelola', ['pengelola'=>$pengelola, 'tiket'=>$tiket]);
            //dd($pengelola->wisata->event);
        }
    }

    #menampilkan halaman pengaturan profile / akun
    public function showPengaturanAkun($id)
    {
        $akun = Akun::find($id);
        return view('akun/pengaturan_akun',['akun'=>$akun]);
    }

    #menampilkan halaman pengaturan wisata
    public function showPengaturanWisata($id)
    {
        $wisata = Wisata::find($id);
        return view('akun/pengaturan_wisata', ['wisata'=>$wisata]);
    }

    #menampilkan halaman pengaturan event
    public function showPengaturanEvent($id)
    {
        $event = Event::find($id);
        return view('akun/pengaturan_event', ['event'=>$event]);
    }




#==================================================
#========== B.A.R.U...P.S.I...ANTI-MAGER ==========
#==================================================

    #Menampilkan Halaman Form Tiket
    public function showFormTiket($id)
    {
        $event = Event::find($id);
        return view('form_tiket', ['event'=>$event]);
    }

    public function showPenjualan($id)
    {
        // $pengelola = Akun::find($id);
        // $event = Event::select('id')->whereIn('wisata_id', $pengelola->wisata->event)->get();
        // $ti = Tiket::groupBy('event_id')->where('event_id', 22)->sum('total_bayar');
        $tiket = Tiket::groupBy('event_id')->selectRaw('event_id ,sum(jumlah_tiket) as jumlah, sum(total_bayar)*0.9 as total')->where('event_id', $id)->get();
        // dd($tiket->all());
        return view('akun/detail_penjualan', ['tiket'=>$tiket]);
    }


}
