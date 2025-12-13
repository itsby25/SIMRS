<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;
    protected $table='User';
    protected $fillable = [
        'username',
        'realname',
        'email',
        'password',
        'status',
        'level',
        'akses',
        'aktif',
    ];
}
