<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = '_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'id', 'nama', 'jumlah_order', 'harga'];
    }