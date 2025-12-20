<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Pasien;
use App\Models\registrasi;
use App\Models\antrian;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add(Request $request) {

        //$data=$request->all();

        $simpan= new Users();
        $simpan->username = $request->nama;
        $simpan->realname = $request->nama." ".$request->title;
        $simpan->email = $request->email;
        $simpan->kd_unit = $request->unit;
        $simpan->level = $request->level;
        $simpan->kd_fungsi = $request->fungsi;
        $simpan->kd_jabatan = $request->jabatan;
        $simpan->aktif = 1;
        $simpan->password = md5($request->paswd);
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }

    public function user_get_data(Request $request) {
        $data_user=Users::Where('username',$request->nama)->orWhere('email',$request->email)->get();
        return ($data_user);
    }

    public function patient_add(Request $request) {

        //$data=$request->all();
        $urut= Pasien::all()->count();
        if ($urut < 9)
        {
            $norm="00-00-00-0".$urut+1;

        }
        else
        {
            $norm="00-00-00-".$urut+1;
        }
        

        //echo $norm;
        $simpan= new Pasien();
        $simpan->norm = $norm;
        $simpan->nama = strtoupper($request->nama.$request->title); 
        $simpan->no_id = $request->ktp;
        $simpan->kd_id =1;
        $simpan->marga=$request->marga;
        $simpan->kd_sex=$request->kd_sex;
        $simpan->tempat_lahir=$request->tempat_lahir;
        $simpan->tgl_lahir=$request->ttl;
        $simpan->alamat_asal=$request->alamat_asal;
        $simpan->alamat_domisili=$request->alamat_domisili;
        $simpan->kd_gol_darah=$request->gd;
        $simpan->alergi=$request->alergi;
        $simpan->kd_pekerjaan=$request->kd_pekerjaan;
        $simpan->kd_sts_kawin=$request->kd_sts_kawin;
        $simpan->kd_pendidikan=$request->kd_pendidikan;
        $simpan->kd_agama=$request->kd_agama;
        $simpan->kd_warga_negara=$request->kd_warga_negara;
        $simpan->no_passport=$request->no_passport;
        $simpan->email=$request->email;
        $simpan->aktif=1;
        $simpan->kd_blokir=0;
        $simpan->kd_keluarga=$request->kd_keluarga;
        $simpan->noka_BPJS=$request->noka;
        $simpan->noPolis_Asuransi=$request->no_polis;
        $simpan->no_induk_pegawai=$request->nip;
        $simpan->kd_instansi=$request->kd_instansi;
        $simpan->t_badan=$request->tbdn;
        $simpan->b_badan=$request->bbdn;
        $simpan->kd_diagnosa_awal=$request->kd_diagnosa;     
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }

    public function add_data_kunjungan(Request $request)
    {
         $urut=registrasi::all()->count();
         $hini=DATE("Y-m-d");           
         $antri=antrian::Where('tgl_antrian',$hini)->count();
         $jam_kunjungan=DATE('dmY-his');
        if ($urut < 9)
        {
            $noreg=$jam_kunjungan.$urut+1;

        }
        else
        {
            $noreg=$jam_kunjungan.$urut+1;
        }
        $poli=$request->poli;
        if ($antri < 9)
        {
            $noant=$poli."-".$antri+1;

        }
        else
        {
            $noant=$poli."-".$antri+1;
        }
        
        $que= new antrian();
        $que->no_antrian = $noant;
        $que->tgl_antrian = DATE('Y-m-d');
        $que->save();

        switch ($poli) {
            case 'IGD':
                $id_p=$poli;
                break;
            case 'POLI':
                $id_p=$poli;
                break;            
            default:
                $id_p=$poli;
                break;
        } 
        $register= new registrasi();
        $register->noregister = $id_p."-".$noreg;
        $register->no_antrian = $noant;
        $register->norm = $request->norm;
        $register->status ="0";

        $register->save();


        echo("tersimpan");

    }

    public function get_data_pasien(Request $request)
    {
        $data_pasien=Pasien::Where('norm',$request->norm)->orWhere('nama',$request->nama)->get();
        return json_decode($data_pasien,JSON_UNESCAPED_SLASHES);
    }

    public function get_data_kunjungan(Request $request)
    {
        $tday=DATE("Y-m-d");
        $data_pasien=registrasi::SELECT('pasien.norm AS norm','pasien.nama AS nama','kunjungan.created_at As tanggal','kunjungan.noregister As noregister')->Join('pasien','kunjungan.norm','=','pasien.norm')->Where('kunjungan.norm',$request->norm)->Where('noregister','LIKE',$request->poli."%")->Where('kunjungan.status','0')->Where('kunjungan.created_at','LIKE',$tday."%")->orderBy('kunjungan.id','DESC')->get();
        return json_decode($data_pasien,JSON_UNESCAPED_SLASHES);
    }

    public function get_data_kunjungan_all(Request $request)
    {
        $tday=DATE("Y-m-d");
        $data_pasien=registrasi::SELECT('pasien.norm AS norm','pasien.nama AS nama','kunjungan.created_at As tanggal','kunjungan.noregister As noregister')->Join('pasien','kunjungan.norm','=','pasien.norm')->Where('noregister','LIKE',"IGD%")->Where('kunjungan.status','0')->Where('kunjungan.created_at','LIKE',$tday."%")->orderBy('kunjungan.id','DESC')->get();
        return json_decode($data_pasien,JSON_UNESCAPED_SLASHES);
    }
}
