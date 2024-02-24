<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'notelepon'
    ];
}
