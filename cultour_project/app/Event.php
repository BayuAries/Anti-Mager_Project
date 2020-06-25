<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    #data dimiliki oleh tabel wisata (hasMany)
    public function wisata()
    {
        return $this->belongsTo('App\Wisata');
    }

    #data dimiliki oleh tabel kota (hasMany)
    public function kota()
    {
        return $this->belongsTo('App\Kota');
    }
     #==================================================
     #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
     #================================================== 
    #memiliki banyak data pada tabel tiket
    public function tiket()
    {
        return $this->hasMany('App\Tiket');
    }
    
}
