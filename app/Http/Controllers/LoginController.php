<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\sysparam;
use App\area;
use App\pengumuman_informasi;
use Session;
use Auth;

class LoginController extends Controller
{
    /**
     * used to handle verification user
     * obly guest that can access this controller
     */
    public function __construct()
    {   
        $this->middleware('guest');
        
        $nama_aplikasi = sysparam::where('sgroup', '=', 'nama_aplikasi')->first();
        $title = sysparam::where('sgroup', '=', 'nama_title')->first();
        Session::put('nama_aplikasi', $nama_aplikasi);
        Session::put('title', $title);
    }
    
    /**
     * used to handle authentication(login)
     * @return [type] [description]
     */

    public function index() {

    	$area = area::all();
    	$pengumuman_informasi = DB::table('pengumuman_informasi')->join('sysparam', function ($join) {
            $join->on('sysparam.skey', '=' , 'pengumuman_informasi.status');
        })->get();
    	

        return view('login.index', ['area' => $area , 'pengumuman_informasi' => $pengumuman_informasi]);
    }


    public function loginPost(Request $request)
    {
        
        $credentials = [
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ];

            
            if(Auth::attempt($credentials)){
               
                 return redirect()->route('home-index');

            }
            else{
                Session::flash('message', 'Username Dan Password Tidak Cocok'); 
                Session::flash('alert-class', 'alert-danger alert-dismissable'); 
                return redirect()->route('login-index');
            }

    }

    
}
