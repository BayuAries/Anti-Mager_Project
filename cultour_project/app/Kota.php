<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';

    #memiliki banyak data pada tabel wisata
    public function wisata()
    {
        return $this->hasMany('App\Wisata');
    }

    #memiliki banyak data pada tabel event
    public function event()
    {
        return $this->hasMany('App\Event');
    }
}
