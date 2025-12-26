<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Pasien;
use App\Models\Kunjungan;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function register() {

        return view('dashboard_registration');
    }

    public function igd() {
        $tday=DATE("Y-m-d");
        $kunjungan_hi=Kunjungan::SELECT('pasien.norm AS norm','pasien.nama AS nama','kunjungan.created_at As tanggal','kunjungan.noregister As noregister','antrian.no_antrian As antrian')->Join('pasien','kunjungan.norm','=','pasien.norm')->Join('antrian','kunjungan.noregister','=','antrian.no_register')->Where('noregister','LIKE',"IGD%")->Where('kunjungan.status','0')->Where('kunjungan.created_at','LIKE',$tday."%")->OrderBy('kunjungan.id','ASC')->get();
        return view('emergency',compact('kunjungan_hi'));
    }

    public function rawin() {

        return view('inpatient');
    }

    public function rajal() {

        return view('outpatient');
    }
     
    public function login() {
        return view('login');
     }

    public function laborat(){
        return view('lims');
    } 

    public function farmasi(){
		return view ('pharmacy');	
	}
	
	public function radiologi(){
		return view ('rim');	
	}
    
    public function mcu(){
		return view ('mcu');	
	}

     public function rekamedis(){
		return view ('erekamedis');	
	}

     public function rehap(){
		return view ('fisio');	
	}
    
    public function operasi(){
		return view ('surgery');	
	}

     public function darah(){
		return view ('blood');	
	}

    public function dashboard(Request $request) {

      if ($request->session()->has('username')) {
            $uname= $request->session()->get('username');
            $passwd= $request->session()->get('password');
        }
        else
        {    
      $uname=$request->username;
      $passwd=$request->passwd;
        }
      $get_user=Users::Where('username',$uname)->Where('password',md5($passwd))->count();
      $request->session()->put('username',$uname);
      $request->session()->put('password',$passwd);
      
      switch ($get_user) {
        case 0:
            return view('login');
            break;
        
        default:       
            $user= $request->session()->get('username');
            $password= $request->session()->get('password');
            $profile=Users::Where('username',$user);
            $total_pasien=Pasien::All()->count();
            $latest_norm= Pasien::SELECT('norm','nama')->Orderby('id','DESC')->limit(1)->get();
            return view('dashboard',compact('user','profile','total_pasien','latest_norm'));
            break;
      }
     
    }
     
    public function user_new() {
        return view('user');
    }
    
    public function in_igd() {
        return view('input_emergency');
    }
}
