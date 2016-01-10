<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
	 public function __construct()
    {	
    	$this->middleware('auth');

    	
    }
    
    public function index(){

    	$header_title = "Beranda";
    	$page_description = "";
    	$infoDasar = ['header_title' => $header_title,'page_description' => $page_description];
    	
    	return view('beranda.index',['infoDasar' => $infoDasar]);
    }
}
