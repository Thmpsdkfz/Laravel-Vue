<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use App\Http\Requests\PerfilCreateRequest;

class HomeController extends Controller
{
    //
    public function index() {

        $contestant = new Contestant;

        $resultado = $contestant->all();

        return view('welcome', compact('resultado'));
    }    //
    public function contact() {
        return view('contacto');
    }    //
    public function profile() {
        return view('perfil');
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