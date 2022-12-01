<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cinemas extends Model
{
    protected $table = 'cinemas';
    public $timestamps = false;

    protected $fillable = [
        'id', 'Namacinema', 'Lokasi','file', 'Lokasi', 'JamBuka', 'JamTutup'

    ];
}
