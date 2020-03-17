<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class AdminController extends Controller {
    
    public function index(){
        $data = User::where('status','activo')->get();
        
        return view('admin.index',['users' => $data ]);
    }

    public function create() {
        return view('admin.create');
    }

    public function edit($id) {
        $data = User::where('id',$id)->first();

        return view('admin.edit',['user'=> $data]);
    }

    public function store(Request $request) {
        $data = $request->input();
        
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt('123456');
        $user->tipo_usuario = $data['tipo_usuario'];
        $user->status = $data['estatus'];
        $user->activacion = false;
        $user->save();

        return redirect('admin')->with('message','Usuario agregado correctamente');
    }

    public function update(Request $request, $id) {
        $data = $request->input();
        
        $user = User::findOrFail($id);
        $user->name = $data['name'] == null ? $user->name : $data['name'];
        $user->email = $data['email'] == null ? $user->email : $data['email'];
        $user->password = $data['password'] == null ? $user->password : bcrypt($data['password']);
        $user->tipo_usuario = $data['tipo_usuario'] == null ? $user->tipo_usuario : $data['tipo_usuario'];
        $user->status = $data['estatus'] == null ? $user->status : $data['estatus'];
        $user->update();

        return redirect('admin')->with('message','Datos actualizados correctamente');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->status = 'Inactivo';
        $user->update();

        return Redirect::back()->with('message', 'Usuario eliminado correctamente.');
    }
}
