<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Akun;
use App\Wisata;
use App\Kota;
use App\Event;
use App\Review;

class AdminController extends Controller
{
    #==========CONTROLLER VIEW==========

    #menampilkan halaman beranda admin
    public function showBeranda()
    {
        return view('admin/beranda_admin');
    }

    #menampilkan halaman registrasi admin
    public function showRegisterAdmin()
    {
        return view('admin/register_admin');
    }

    #menampilkan halaman daftar akun semua user
    public function showAkun()
    {
        $akun = Akun::paginate(25);
        return view('admin/akun_admin', ['akun'=>$akun]);
    }

    #menampilkan halaman daftar akun berdasarkan pencarian
    public function pencarianAkun(Request $req)
    {
        $role = $req->role;
        $nama = $req->nama;

        if($role == 'semua'){
            $akun = Akun::where('nama', 'like', '%'.$nama.'%')->paginate(25);
        }elseif($role != 'semua'){
            $akun = Akun::where('nama', 'like', '%'.$nama.'%')->where('role', $role)->paginate(25);
        }
        
        return view('admin/akun_admin', ['akun'=>$akun]);
    }

    #menampilkan halaman wisata budaya
    public function showWisata()
    {
        $wisata = Wisata::paginate(25);
        return view('admin/wisata_admin', ['wisata'=>$wisata]);
    }

    #menampilkan halaman daftar wisata berdasarkan pencarian
    public function pencarianWisata(Request $req)
    {
        $status = $req->status_wisata;
        $nama = $req->nama_wisata;

        if($status == 'semua'){
            $wisata = Wisata::where('nama_wisata', 'like', '%'.$nama.'%')->paginate(25);
        }elseif($status != 'semua'){
            $wisata = Wisata::where('nama_wisata', 'like', '%'.$nama.'%')->where('status_wisata', $status)->paginate(25);
        }
        
        return view('admin/wisata_admin', ['wisata'=>$wisata]);
    }

    #menampilkan halaman daftar event
    public function showEvent()
    {
        $event = Event::paginate(25);
        return view('admin/event_admin', ['event'=>$event]);
    }

    #menampilkan halaman daftar event berdasarkan pencarian
    public function pencarianEvent(Request $req)
    {
        $status = $req->status_event;
        $nama = $req->nama_event;

        if($status == 'semua'){
            $event = Event::where('nama_event', 'like', '%'.$nama.'%')->paginate(25);
        }elseif($status != 'semua'){
            $event = Event::where('nama_event', 'like', '%'.$nama.'%')->where('status_event', $status)->paginate(25);
        }
        
        return view('admin/event_admin', ['event'=>$event]);
    }

    #menampilakan halaman daftar review
    public function showReview()
    {
        $review = Review::paginate(25);
        return view('admin/review_admin', ['review'=>$review]);
    }

    #menampilkan halaman daftar event berdasarkan pencarian
    public function pencarianReview(Request $req)
    {
        $nama = $req->nama_akun;

        $review = Review::where('akun_nama', 'like', '%'.$nama.'%')->paginate(25);
        
        return view('admin/review_admin', ['review'=>$review]);
    }



    #==========CONTROLLER PROSES==========

    #registrasi admin
    public function register(Request $req)
    {
        $akun = new Akun();
        $akun->nama = $req->nama;
        $akun->email = $req->email;
        $akun->password = bcrypt($req->password);
        $akun->role = $req->role;
        $akun->save();

        Session::put('id',$akun->id);
        Session::put('nama',$akun->nama);
        Session::put('role',$akun->role);
        Session::put('login',TRUE);

        return redirect('/beranda-admin');
    }

    #logout
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    #terima wisata
    public function terimaWisata($id)
    {
        $wisata = Wisata::find($id);
        $wisata->status_wisata = "diterima";
        $wisata->save();
        
        return redirect('/wisata-admin')->with('alert', 'Wisata budaya telah diterima.');
    }

    #tolak wisata
    public function tolakWisata($id)
    {
        $wisata = Wisata::find($id);
        $wisata->status_wisata = "ditolak";
        $wisata->save();
        
        return redirect('/wisata-admin')->with('alert', 'Wisata budaya telah ditolak.');
    }

    #hapus akun wisatawan
    public function hapusWisatawan($id)
    {
        $akun = Akun::find($id);
        $akun->delete();

        return redirect()->back()->with('alert', 'Akun telah dihapus.');
    }

    #hapus akun pengelola yang tidak memiliki wisata budaya
    public function hapusPengelola($id)
    {
        $akun = Akun::find($id);
        $akun->delete();

        return redirect()->back()->with('alert', 'Akun telah dihapus.');
    }

    #hapus akun pengelola yang memiliki wisata budaya
    public function hapusPengelolaDanData($id, $wisata_id)
    {
        $akun = Akun::find($id);
        $wisata = Wisata::where('akun_id', $id);
        $event = Event::where('wisata_id', $wisata_id);
        $review = Review::where('wisata_id', $wisata_id);
        
        if($review){
            $review->delete();
        }

        if($event){
            $event->delete();
        }
        
        if($wisata){
            $wisata->delete();
        }
        
        $akun->delete();
        
        return redirect()->back()->with('alert', 'Akun telah dihapus.');
    }

    #hapus wisata budaya
    public function hapusWisata($id)
    {
        $wisata = Wisata::find($id);
        $event = Event::where('wisata_id', $id);
        $review = Review::where('wisata_id', $id);

        if($review){
            $review->delete();
        }

        if($event){
            $event->delete();
        }
        
        $wisata->delete();

        return redirect()->back()->with('alert', 'Wisata budaya telah dihapus.');
    }

    #hapus event
    public function hapusEvent($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->back()->with('alert', 'Event telah dihapus.');
    }

    #hapus review
    public function hapusReview($id)
    {
        $review = Review::find($id);

        $review->delete();

        return redirect()->back()->with('alert', 'Review telah dihapus.');
    }
}
