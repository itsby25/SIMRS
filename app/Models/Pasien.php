<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $table='pasien';
    protected $fillable =[
    'norm', 
    'nama', 
    'no_id',
    'kd_id',
    'marga',
    'kd_sex',
    'tempat_lahir',
    'tgl_lahir',
    'alamat_asal',
    'alamat_domisili',
    'kd_gol_darah',
    'alergi',
    'kd_pekerjaan',
    'kd_sts_kawin',
    'kd_pendidikan',
    'kd_agama',
    'kd_warga_negara',
    'no_passport',
    'email',
    'aktif',
    'kd_blokir',
    'kd_keluarga',
    'noka_BPJS',
    'noPolis_Asuransi',
    'no_induk_pegawai',
    'kd_instansi',
    't_badan',
    'b_badan',
    'kd_diagnosa_awal',
];
}
