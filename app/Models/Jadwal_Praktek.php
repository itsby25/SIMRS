<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal_Praktek extends Model
{
    //
    use HasFactory;
    protected $table='jadwal_praktek';
    protected $cast=['no'=>'string'];
}
