<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    #data dimiliki oleh tabel akun (hasMany)
    public function akun()
    {
        return $this->belongsTo('App\Akun');
    }

    #data dimiliki oleh tabel wisata (hasMany)
    public function wisata()
    {
        return $this->belongsTo('App\Wisata');
    }
}
