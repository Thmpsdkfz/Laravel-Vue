<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use App\Http\Requests\PerfilCreateRequest;

class HomeController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }    

    public function contact() {
        return view('contacto');
    }    

    public function profile() {
        return view('perfil');
    }

    public function ajx_participantes(){
        $contestant = new Contestant;
        $resultado = $contestant->all();
        return $resultado;
    }

    public function save_r(PerfilCreateRequest $request){

        $new_contestant = new Contestant;

        $new_contestant->fullname = $request->fullname;
        $new_contestant->gid = $request->gid;
        $new_contestant->email = $request->email;

        $new_contestant->save();

        return redirect();

    }
}