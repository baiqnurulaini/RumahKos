<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah_kos extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kos', 'jenis', 'harga', 'jarak', 'luas', 'lat', 'lng', 'foto_kos', 'sisa_kamar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'nama_kos', 'jenis', 'harga', 'jarak', 'luas', 'lat', 'lng', 'foto_kos', 'sisa_kamar',
    ];
}
