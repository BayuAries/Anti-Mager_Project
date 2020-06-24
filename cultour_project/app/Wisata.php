<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';

    #data dimiliki oleh tabel akun (hasOne)
    public function akun()
    {
        return $this->belongsTo('App\Akun');
    }

    #memiliki banyak data tabel event
    public function event()
    {
        return $this->hasMany('App\Event');
    }

    #data dimiliki ole tabel kota (hasMany)
    public function kota()
    {
        return $this->belongsTo('App\Kota');
    }

    #memiliki banyak data tabel review
    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
