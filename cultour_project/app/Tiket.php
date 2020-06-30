<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{

	// #==================================================
    // #========== B.A.R.U...P.S.I...ANTI-MAGER ==========
    // #==================================================	
    
    protected $table = 'tiket';

    #data dimiliki oleh tabel event (hasMany)
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    #data dimiliki oleh tabel akun (hasMany)
    public function akun()
    {
    	return $this->belongsTo('App\Akun');
    }
}
