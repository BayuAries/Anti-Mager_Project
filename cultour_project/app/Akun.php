<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'akun';

    #memiliki satu data pada tabel wisata
    public function wisata()
    {
        return $this->hasOne('App\Wisata');
    }

    #memiliki banyak data pada tabel review
    public function review()
    {
        return $this->hasMany('App\Review');
    }
}
