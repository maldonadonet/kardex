<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Datos;

class AlumnosController extends Controller
{
    public function index(){
        $data = DB::table('users as u')
        ->join('tb_datos_usuarios as d','u.id','=','d.usuario_id')
        ->select('u.id','u.name','u.email','u.tipo_usuario','u.status','u.activacion','u.created_at','u.updated_at','d.foto','d.matriculado')
        ->where('u.status','activo')
        ->where('u.tipo_usuario','alumno')
        ->get();

        return view('alumnos.index',['users' => $data ]);
    }

    public function create() {
        return view('alumnos.create');
    }

    public function edit($id) {
        $data = User::where('id',$id)->first();
        $datos = Datos::where('usuario_id',$id)->first();

        return view('alumnos.edit',['user'=> $data,'datos'=>$datos]);
    }

    public function show($id) {
        $data = Datos::where('usuario_id',$id)->first();
        return view('alumnos.show',['alumno' => $data]);
    }

    public function store(Request $request) {
        $data = $request->input();
        
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt('123456');
        $user->tipo_usuario = 'alumno';
        $user->status = $data['status'];
        $user->activacion = false;
        $user->save();

        $datos = new Datos();
        $datos->usuario_id = $user->id;
        $datos->nombre = $user->name;
        $datos->email = $user->email;
        $datos->password = $user->password;
        $datos->save();
       
        return redirect('alumnos')->with('message','Alumno agregado correctamente');
    }

    public function update(Request $request, $id) {
        $data = $request->input();
        
        $datos = Datos::findOrFail($id);
        $datos->nombre = $data['nombre'] == null ? $datos->nombre : $data['nombre'];
        $datos->apellido = $data['apellido'] == null ? $datos->apellido : $data['apellido'];
        $datos->cedula = $data['cedula'] == null ? $datos->cedula : $data['cedula'];
        $datos->fnacimiento = $data['fnacimiento'] == null ? $datos->fnacimiento : $data['fnacimiento'];
        $datos->direccion = $data['direccion'] == null ? $datos->direccion : $data['direccion'];
        $datos->cuidad = $data['cuidad'] == null ? $datos->cuidad : $data['cuidad'];
        $datos->genero = $data['genero'] == null ? $datos->genero : $data['genero'];
        $datos->titulo = $data['titulo'] == null ? $datos->titulo : $data['titulo'];
        $datos->telefono =  $data['telefono'] == null ? $datos->telefono : $data['telefono'];
        $datos->update();

        return redirect('alumnos')->with('message','Datos actualizados correctamente');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->status = 'Inactivo';
        $user->update();

        return Redirect::back()->with('message', 'Usuario eliminado correctamente.');
    }
}
