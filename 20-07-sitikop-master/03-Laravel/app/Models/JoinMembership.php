<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinMembership extends Model
{
    protected $table = '_join_membership';
    public $timestamps = false;

    protected $fillable = [
        'id', 'gender', 'email', 'phone_number', 'banking','operator', 'name_membership', 'membership_type'

    ];
}
