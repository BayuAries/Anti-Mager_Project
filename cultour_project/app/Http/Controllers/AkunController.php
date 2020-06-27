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

class AkunController extends Controller
{
    #login
    public function login(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        $messages = [
            'required' => ':attribute harap diisi',
            'max' => ':attribute maksimal harus 16 karakter'
        ];

        $this->validate($req,[
            'email' => 'required|email',
            'password' => 'required|max:16'
        ], $messages);

        $akun = Akun::where('email',$email)->first();
        if($akun){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$akun->password)){
                Session::put('id',$akun->id);
                Session::put('nama',$akun->nama);
                Session::put('role',$akun->role);
                Session::put('foto_profile',$akun->foto_profile);
                Session::put('login',TRUE);

                
                if(Session::get('role') == "admin"){
                    return view('admin/beranda_admin');
                }else{
                    $wisata = Wisata::where('status_wisata', 'diterima')->get()->random(3);
                    $event = Event::all()->random(3);
                    return view('beranda', ['wisata'=>$wisata, 'event'=>$event]);
                }
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    #logout
    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout.');
    }

    #registrasi wisatawan
    public function registerWisatawan(Request $req)
    {
        $pesan_error = [
            'required' => ':attribute harus diisi',
            'max' => ':attribute maksimal harus 16 karakter'
        ];

        $this->validate($req, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required|max:16'
        ], $pesan_error);

        if($req->konfirmasi_password == $req->password){
            $akun = new Akun();
            $akun->nama = $req->nama;
            $akun->email = $req->email;
            $akun->password = bcrypt($req->password);
            $akun->role = 'wisatawan';
            $akun->save();

            Session::put('id',$akun->id);
            Session::put('nama',$akun->nama);
            Session::put('role',$akun->role);
            Session::put('login',TRUE);
    
            $wisata = Wisata::where('status_wisata', 'diterima')->get()->random(3);
            $event = Event::all()->random(3);
            return view('beranda', ['wisata'=>$wisata, 'event'=>$event]);
        }else{
            return redirect()->back()->with('alert', 'password tidak sama');
        }

    }

    #registrasi pengelola
    public function registerPengelola(Request $req)
    {
        $pesan_error = [
            'required' => ':attribute harus diisi',
            'max' => ':attribute maksimal harus 16 karakter'
        ];

        $this->validate($req, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required|max:16'
        ], $pesan_error);

        if($req->konfirmasi_password == $req->password){
            $akun = new Akun();
            $akun->nama = $req->nama;
            $akun->email = $req->email;
            $akun->password = bcrypt($req->password);
            $akun->role = 'pengelola';
            $akun->save();

            Session::put('id',$akun->id);
            Session::put('nama',$akun->nama);
            Session::put('role',$akun->role);
            Session::put('login',TRUE);
    
            $wisata = Wisata::where('status_wisata', 'diterima')->get()->random(3);
            $event = Event::all()->random(3);
            return view('beranda', ['wisata'=>$wisata, 'event'=>$event]);
        }else{
            return redirect()->back()->with('alert', 'password tidak sama');
        }
    }

    #mendaftarkan wisata budaya oleh pengelola
    public function registerWisata($id, Request $req)
    {
        $pesan_error = [
            'required' => ':attribute harus diisi',
            'image' => ':attribute harus berupa file gambar',
            'numeric' => ':attribute harus berupa angka'
        ];

        if($req->htm_wisata){
            $this->validate($req, [
                'nama_wisata' => 'required',
                'foto_wisata' => 'image',
                'alamat_wisata' => 'required',
                'deskripsi_wisata' => 'required',
                'hari' => 'required',
                'htm_wisata' => 'numeric'
            ], $pesan_error);
        }else{
            $this->validate($req, [
                'nama_wisata' => 'required',
                'foto_wisata' => 'image',
                'alamat_wisata' => 'required',
                'deskripsi_wisata' => 'required',
                'hari' => 'required',
            ], $pesan_error);
        }

        

        #simpan data wisata budaya
        $wisata = new Wisata();
        $wisata->akun_id = $id;
        $wisata->kota_id = $req->kota;
        $wisata->status_wisata = 'ditunda';
        $wisata->nama_wisata = $req->nama_wisata;
        $wisata->alamat_wisata = $req->alamat_wisata;
        $wisata->deskripsi_wisata = $req->deskripsi_wisata;

        if($req->htm){
            $wisata->htm_wisata = $req->htm;
        }else{
            $wisata->htm_wisata = 'gratis';
        }

        $jadwal = implode(", ", $req->hari);
        $wisata->jadwal_wisata = $jadwal;

        $wisata->save();

        if($req->file('foto_wisata')){
            $file = $req->file('foto_wisata');
            $nama_file = $wisata->id.time().'_foto_wisata.png';
            $tujuan_upload = 'images/foto_wisata_budaya';
            $file->move($tujuan_upload, $nama_file);
            $wisata->foto_wisata = $nama_file;
            $wisata->save();
        }
        
        return redirect('/profile/'.Session::get('id'));
    }

    #mengajukan wisata budaya kembali oleh pengelola
    public function registrasiKembaliWisata($id)
    {
        $wisata = Wisata::find($id);
        $wisata->status_wisata = 'ditunda';
        $wisata->save();

        return redirect()->back();
    }

    #membuat event oleh pengelola
    public function registerEvent($id, Request $req)
    {
        $wisata = Wisata::find($id);

        $event = new Event();

        $event->wisata_id = $id;
        $event->kota_id = $wisata->kota_id;
        $event->status_event = 'belum mulai';
        $event->kuota = $req->kuota;
        $event->nama_event = $req->nama_event;
        $event->alamat_event = $wisata->alamat_wisata;
        $event->deskripsi_event = $req->deskripsi_event;
        $event->kuota = $req->kuota;

        $event->tanggal_mulai_event = $req->tanggal_mulai_event;
        if($req->tanggal_selesai_event){
            $event->tanggal_selesai_event = $req->tanggal_selesai_event;
        }

        if($req->htm_event){
            $event->htm_event = $req->htm_event;
        }else{
            $event->htm_event = 'gratis';
        }

        $event->save();

        if($req->file('foto_event')){
            $file = $req->file('foto_event');
            $nama_file = $event->id.time().'_foto_wisata.png';
            $tujuan_upload = 'images\foto_event';
            $file->move($tujuan_upload, $nama_file);
            $event->foto_event = $nama_file;
            $event->save();
        }

        return redirect('/profile/'.Session::get('id'));
    }

    #edit pengaturan akun
    public function pengaturanAkun($id, Request $req)
    {
        $akun = Akun::find($id);
        $review = Review::where('akun_id', $id)->get();

        $messages = [
            'required' => ':attribute harap diisi',
            'max' => ':attribute maksimal harus 16 karakter',
            'size' => 'ukuran file terlalu besar'
        ];

        $this->validate($req,[
            'foto_profile' => 'max:2048',
            'nama' => 'required',
            'email' => 'required',
            'password_akun' => 'required|max:16',
            'password_baru' => 'max:16',
            'konfirmasi_password_baru' => 'max:16'
        ], $messages);


        if(Hash::check($req->password_akun, $akun->password)){
            
            $akun->nama = $req->nama;
            $akun->email = $req->email;
            
            foreach($review as $r){
                $r->akun_nama = $req->nama;
                $r->save();
            }

            #ganti password
            if($req->password_baru != null && $req->konfirmasi_password_baru == $req->password_baru){
                $akun->password = bcrypt($req->password_baru);
            }elseif($req->password_baru == null){
                $akun->password = $akun->password;
            }else{
                return redirect()->back()->with('konfirmasi', 'password tidak sama');
            }
            $akun->save();

            #upload foto profile
            #menyimpan data file yang diupload ke variabel $file
            if($req->file('foto_profile')){
                $file = $req->file('foto_profile');
                $nama_file = $akun->id.time()."_profile.png";
                $tujuan_upload = 'images/foto_profile';
                $file->move($tujuan_upload,$nama_file);
                $akun->foto_profile = $nama_file;
                $akun->save();
            }

            Session::forget('nama');
            Session::put('nama', $req->nama);

            Session::forget('foto_profile');
            Session::put('foto_profile',$akun->foto_profile);

            return redirect('/profile/'.Session::get('id'));
        }else{
            return redirect()->back()->with('alert', 'password salah');
        }
    }

    #pengaturan wisata budaya
    public function pengaturanWisata($id, Request $req)
    {

        if($req->htm_wisata){
            $pesan_error = [
                'numeric' => ':attribute haruslah angka'
            ];

            $this->validate($req, [
                'htm_wisata' => 'numeric'
            ], $pesan_error);
        }

        $wisata = Wisata::find($id);
        
        $wisata->nama_wisata = $req->nama_wisata;
        $wisata->alamat_wisata = $req->alamat_wisata;
        $wisata->deskripsi_wisata = $req->deskripsi_wisata;

        if($req->hari){
            $jadwal = implode(", ", $req->hari);
            $wisata->jadwal_wisata = $jadwal;
        }

        if($req->htm_wisata){
            $wisata->htm_wisata = $req->htm_wisata;
        }else{
            $wisata->htm_wisata = 'gratis';
        }

        if($req->file('foto_wisata')){
            $file = $req->file('foto_wisata');
            $nama_file = $wisata->id.time().'_foto_wisata.png';
            $tujuan_upload = 'images/foto_wisata_budaya';
            $file->move($tujuan_upload, $nama_file);
            $wisata->foto_wisata = $nama_file;
        }
        $wisata->save();

        return redirect('/profile/'.Session::get('id'));
    }

    #pengaturan event
    public function pengaturanEvent($id, Request $req)
    {
        $event = Event::find($id);

        $event->nama_event = $req->nama_event;
        $event->deskripsi_event = $req->deskripsi_event;

        $event->tanggal_mulai_event = $req->tanggal_mulai_event;

        if($req->tanggal_selesai_event){
            $event->tanggal_selesai_event = $req->tanggal_selesai_event;
        }else{
            $event->tanggal_selesai_event = null;
        }

        if($req->htm_event){
            $event->htm_event = $req->htm_event;
        }else{
            $event->htm_event = 'gratis';
        }

        $event->status_event = $req->status_event;

        $event->save();

        if($req->file('foto_event')){
            $file = $req->file('foto_event');
            $nama_file = $event->id.time().'_foto_wisata.png';
            $tujuan_upload = 'images\foto_event';
            $file->move($tujuan_upload, $nama_file);
            $event->foto_event = $nama_file;
            $event->save();
        }

        return redirect('/profile/'.Session::get('id'));
    }

    #menghapus akun wisatawa
    public function hapusAkunWisatawan($id)
    {
        $akun = Akun::find($id);
        
        Session::flush();
        $akun->delete();
        return redirect('/login')->with('alert', 'Akun anda telah dihapus.');
    }
    
    #menghapus akun pengelola yang tidak memiliki wisata budaya
    public function hapusAkunPengelola($id)
    {
        $akun = Akun::find($id);
        
        Session::flush();
        $akun->delete();
        return redirect('/login')->with('alert', 'Akun anda telah dihapus.');
    }

    #manghapus akun pengelola yang memiliki wisata budaya
    public function hapusAkunPengelolaDanData($id, $wisata_id)
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
        
        Session::flush();
        
        $akun->delete();
        
        return redirect('/login')->with('alert', 'Akun anda telah dihapus.');
    }
    
    #hapus wisata
    public function hapusWisata($id, $wisata_id)
    {
        $wisata = Wisata::where('akun_id', $id);
        $event = Event::where('wisata_id', $wisata_id);
        
        if($event){
            $event->delete();
        }
        
            $wisata->delete();
            
            return redirect()->back();
    }

    #hapus event
    public function hapusEvent($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->back();
    }
    
    #memberi review oleh wisatawan
    public function review(Request $req)
    {
        #simpan review
        $review = new Review();
        $review->wisata_id = $req->wisata_id;
        $review->akun_id = $req->akun_id;
        $review->akun_nama = $req->akun_nama;
        $review->review = $req->review;
        $review->save();
    
        return redirect()->back();
    }

    #edit review
    public function editReview($id, Request $req)
    {
        $review = Review::find($id);
        $review->review = $req->review;
        $review->save();

        return redirect()->back();
    }
    
    #hapus review
    public function hapusReview($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->back();
    }
}