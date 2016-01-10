<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LogoutController extends Controller
{
     public function __construct()
    {	
    	$this->middleware('auth');
    }

    /**
	 * used to handle authentication(logout)
	 * @return [type] [description]
	 */
    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('login-index');
    }
}
