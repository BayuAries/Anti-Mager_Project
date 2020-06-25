<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



#================================================
#=========== R O U T E   H A L A M A N ==========
#================================================

#halaman beranda
Route::get('/', 'PageController@showBeranda');

#halaman daftar wisata
Route::get('/daftar-wisata', 'PageController@showDaftarWisata');

#pencarian daftar wisata
Route::post('/daftar-wisata-cari', 'PageController@cariWisata');

#filter daftar wisata
Route::post('/daftar-wisata-filter', 'PageController@filterWisata');

#halaman informasi wisata
Route::get('/show-wisata/{id}', 'PageController@showWisata');

#halaman daftar event
Route::get('/daftar-event', 'PageController@showDaftarEvent');

#pencarian event
Route::post('/daftar-event-cari', 'PageController@cariEvent');

#filter event
Route::post('/daftar-event-filter', 'PageController@filterEvent');

#halaman informasi event
Route::get('/show-event/{id}', 'PageController@showEvent');

#halaman login
Route::get('/login', 'PageController@showLogin');

#halaman opsi registrasi
Route::get('/register', 'PageController@showOpsiRegister');

#halaman registrasi wisatawan
Route::get('/register/wisatawan', 'PageController@showRegisterWisatawan');

#halaman registrasi pengelola
Route::get('/register/pengelola', 'PageController@showRegisterPengelola');

#halaman registrasi Admin
Route::get('/register/admin', 'AdminController@showRegisterAdmin');

#halaman registrasi wisata budaya
Route::get('/register/wisata', 'PageController@showRegisterWisata');

#halaman registrasi event
Route::get('/register/event/{id}', 'PageController@showRegisterEvent');

#halaman profile
Route::get('/profile/{id}', 'PageController@showProfile');

#halaman pengaturan profile / akun
Route::get('/profile/pengaturan/{id}', 'PageController@showPengaturanAkun');

#halaman pengaturan wisata budaya
Route::get('/profile/pengaturan-wisata/{id}', 'PageController@showPengaturanWisata');

#halaman pengaturan event
Route::get('/profile/pengaturan-event/{id}', 'PageController@showPengaturanEvent');



#=========================================
#========== R O U T E   A K U N ==========
#=========================================

#login
Route::post('/login-post', 'AkunController@login');

#logout
Route::get('/logout', 'AkunController@logout');

#register wisatawan / simpan data wisatawan
Route::post('/register/wisatawan/store', 'AkunController@registerWisatawan');

#register pengelola / simpan data pengelola
Route::post('/register/pengelola/store', 'AkunController@registerPengelola');

#register wisata budaya / simpan data wisata budaya oleh pengelola
Route::post('/register/wisata/store/{id}', 'AkunController@registerWisata');

#mengajukan kembali wisata budaya
Route::get('/register-ulang/wisata/{id}', 'AkunController@registrasiKembaliWisata');

#register event / simpan data event oleh pengelola
Route::post('/register/event/store/{id}', 'AkunController@registerEvent');

#simpan update data akun
Route::post('/akun-update/{id}', 'AkunController@pengaturanAkun');

#simpan update data wisata budaya
Route::post('/wisata-update/{id}', 'AkunController@pengaturanWisata');

#simpan update data event
Route::post('/event-update/{id}', 'AkunController@pengaturanEvent');

#hapus akun wisatawan
Route::get('/hapus-akun-wisatawan/{id}', 'AkunController@hapusAkunWisatawan');

#hapus akun pengelola yang tidak memiliki wisata budaya
Route::get('/hapus-akun-pengelola/{id}', 'AkunController@hapusAkunPengelola');

#hapus akun pengelola yang memiliki wisata budaya
Route::get('/hapus-akun-pengelola/{id}/{wisata_id}', 'AkunController@hapusAkunPengelolaDanData');

#hapus wisata
Route::get('/hapus-wisata/{id}/{wisata_id}', 'AkunController@hapusWisata');

#hapus event
Route::get('/hapus-event/{id}', 'AkunController@hapusEvent');

#simpan review
Route::post('/review/store', 'AkunController@review');

#edit review
Route::post('/review-edit/{id}', 'AkunController@editReview');

#hapus review
Route::get('/review-hapus/{id}', 'AkunController@hapusReview');





#===============================
#========== A D M I N ==========
#===============================

#------------halaman------------

#halaman beranda admin
Route::get('/beranda-admin', 'AdminController@showBeranda');

#halaman registrasi admin
Route::get('/register-admin', 'AdminController@showRegisterAdmin');

#halaman daftar akun users
Route::get('/akun-admin', 'AdminController@showAkun');

#pencarian halaman daftar akun users
Route::post('/akun-admin-cari', 'AdminController@pencarianAkun');

#halaman wisata budaya
Route::get('/wisata-admin', 'AdminController@showWisata');

#pencarian wisata budaya
Route::post('wisata-admin-cari', 'AdminController@pencarianWisata');

#halaman daftar event
Route::get('/event-admin', 'AdminController@showEvent');

#pencarian event
Route::post('/event-admin-cari', 'AdminController@pencarianEvent');

#halaman daftar review
Route::get('/review-admin', 'AdminController@showReview');

#pencarian review
Route::post('/review-admin-cari', 'AdminController@pencarianReview');

#----------proses----------

#membuat / mendaftarkan akun admin
Route::post('/register-admin/store', 'AdminController@register');

#admin logout
Route::get('/logout-admin', 'AdminController@logout');

#terima wisata budaya
Route::get('/terima-wisata/{id}', 'AdminController@terimaWisata');

#tolak wisata budaya
Route::get('/tolak-wisata/{id}', 'AdminController@tolakWisata');

#menghapus akun wisatawan
Route::get('/hapus-wisatawan-admin/{id}', 'AdminController@hapusWisatawan');

#menghapus akun pengelola
Route::get('hapus-pengelola-admin/{id}', 'AdminController@hapusPengelola');

#menghapus akun pengelola dan data-datanya
Route::get('hapus-pengelola-admin/{id}/{wisata_id}', 'AdminController@hapusPengelolaDanData');

#menghapus wisata budaya
Route::get('/hapus-wisata-admin/{id}', 'AdminController@hapusWisata');

#menghapus event
Route::get('/hapus-event-admin/{id}', 'AdminController@hapusEvent');

#menghapus review
Route::get('/hapus-review-admin/{id}', 'AdminController@hapusReview');



#==================================================
#========== B.A.R.U...P.S.I...ANTI-MAGER ==========
#==================================================

#Halaman Form Pesan Tiket
Route::get('/form/event/{id}', 'PageController@showFormTiket');

Route::post('/beli/tiket/store/{id}', 'TiketController@beliTiket');
