<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;

class HomeController extends Controller
{
    public function index(){
        //return view('welcome');

        $contestant = new Contestant;
        dd($contestant->all());
    }
    
    public function contact(){
        return view('contacto');
    }

    public function profile(){
        return view('profile');
    }

}
