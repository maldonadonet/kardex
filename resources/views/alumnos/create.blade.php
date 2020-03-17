@extends('layouts.base')

@section('content')

    <div class="row">

    <div class="col-xs-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong>Registro de Alumnos al sistema</strong> <small> Sistema Administrativo</small>
            </div>
            {!! Form::open(['url' => 'alumnos', 'method'=>'POST','files'=>'true']) !!}
            {{Form::token()}}
            <div class="card-body card-block">
                <div class="form-group">
                    <label class=" form-control-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="name" placeholder="Nombre completo del Alumno">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                        <input class="form-control" type="email" name="email" placeholder="Ingrese correo de Alumno">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Estatus</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa ti-marker-alt"></i></div>
                        <select name="status" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Acciones</label>
                    <div class="input-group">
                        <input type="submit" value="Crear Usuario" class="btn btn-primary">
                    </div>
                </div>
            </div>
        {!!Form::close()!!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="card text-left">
          <img src="{{ asset('images/escuela.jpg') }}" class="img img-fluid img-thumbnail card-img-top rounded mx-auto d-block mt-3" style="width: 57.5% !important;">
          <div class="card-body">
            <h4 class="card-title">Sistema administrativo Kardex 1.0.0</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos, amet necessitatibus a odit, perspiciatis ducimus laudantium atque eligendi pariatur delectus repellendus consectetur possimus nemo excepturi commodi rem fugit ut!</p>
          </div>
        </div>
    </div>

</div>

@endsection