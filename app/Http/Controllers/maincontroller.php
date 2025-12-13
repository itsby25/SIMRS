<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Pasien;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function register() {

        return view('dashboard_registration');
    }

    public function igd() {

        return view('emergency');
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

      $uname=$request->username;
      $passwd=$request->passwd;


      $get_user=Users::Where('username',$uname)->Where('password',md5($passwd))->count();
      $request->session()->put('username',$uname);
      
      switch ($get_user) {
        case 0:
            return view('login');
            break;
        
        default:       
            $user= $request->session()->get('username');
            $profile=Users::Where('username',$user);
            $total_pasien=Pasien::All()->count();
            return view('dashboard',compact('user','profile','total_pasien'));
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
