<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class HomeController extends Controller
{
    public function index(){
        
        $pages = Cliente::all();
        return view('home' ,compact('pages'));
    }
}
