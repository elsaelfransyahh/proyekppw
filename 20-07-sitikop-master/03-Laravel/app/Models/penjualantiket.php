<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualantiket extends Model
{
   
    protected $table = 'penjualantiket';
    public $timestamps = false;

    protected $fillable = [
        'id', 'Title', 'Price', 'Stock'

    ];
}
