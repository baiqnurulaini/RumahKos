<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jarak', 'harga', 'fasilitas',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'jarak', 'harga', 'fasilitas',
    ];
}