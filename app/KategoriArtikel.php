<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $guarded = array();
    protected $table='kategori_artikel';

    protected $fillabel = [
        'nama','users_id',
    ];

    protected $casts = [

    ];
}
