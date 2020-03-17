@extends('layouts.base')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Perfil de Alumno</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" src="{{ asset('images/foto_alumnos').'/'.$alumno->foto }}" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1">{{ $alumno->nombre }}</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{ $alumno->email }}</div>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                            <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                            <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Datos del Alumno</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nombre</th>
                                    <td>{{ $alumno->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Cedula</th>
                                    <td>{{ $alumno->cedula }}</td>
                                </tr>
                                <tr>
                                    <th>Fecha de Nacimiento</th>
                                    <td>{{ $alumno->fnacimiento }}</td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td>{{ $alumno->direccion }}</td>
                                </tr>
                                <tr>
                                    <th>Cuidad</th>
                                    <td>{{ $alumno->cuidad }}</td>
                                </tr>
                                <tr>
                                    <th>Genero</th>
                                    <td>{{ $alumno->genero }}</td>
                                </tr>
                                <tr>
                                    <th>Titulo</th>
                                    <td>{{ $alumno->titulo }}</td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td>{{ $alumno->telefono }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        Acciones
                                    </th>
                                    <td>
                                        <a href="/alumnos/{{ $alumno->usuario_id}}/edit" class="btn btn-outline-primary rounded">Editar perfil</a>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection