<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if($user->activacion == 0) {
            return view('home');
        }else {
            return view('dashboard.index');
        }
        
    }

    public function actualizacion(Request $request) {
        $data = $request->input();

        $user = User::findOrFail($data['id']);
        $user->password = bcrypt( $data['password']);
        $user->activacion = 1;
        $user->update();

        return redirect('dashboard')->with('message','Cuenta activada correctamente');
    }

    public function cambiarclave() {
        return view('cambiar-clave');
    }

    public function updateclave(Request $request) {
        $data = $request->input();

        $usuario = User::findOrFail($data['id']);
        $usuario->password = bcrypt($data['password']);
        $usuario->update();

        return redirect('dashboard')->with('message','Contraseña actualizada correctamente');
    }

}
