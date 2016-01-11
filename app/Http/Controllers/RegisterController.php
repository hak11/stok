<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\InputUserRequest;
use App\sysparam;
Use App\user;
use Session;

class RegisterController extends Controller
{
     public function __construct()
    {	
    	$this->middleware('auth');
    }

    /**
	 * used to handle authentication(logout)
	 * @return [type] [description]
	 */
    public function index()
    {
        $datauser = user::all();

    	return view('management_user.index',compact('datauser'));
    }

    public function regispost(InputUserRequest $request)
    {
        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = $password;
        $register = user::create($input);

        if ($register) {
            Session::flash('message', 'Data Berhasil Masuk'); 
            Session::flash('alert-class', 'alert-success alert-dismissable'); 

            return redirect()->route('regis-user');   
        } else {
            Session::flash('message', 'Data Gagal Masuk Masuk'); 
            Session::flash('alert-class', 'alert-danger alert-dismissable'); 

            return redirect()->route('regis-user');  
        }
        
    }
}
