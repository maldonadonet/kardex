@extends('layouts.base')

@section('content')

<div class="row">

    <div class="col-xs-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <strong>Actualización de perfil</strong> <small> Sistema Administrativo</small>
            </div>
            {!! Form::model($datos,['method'=>'PUT','route'=>['alumnos.update',$datos->id]]) !!}
            {{Form::token()}}
            <div class="card-body card-block">
                <div class="form-group">
                    <label class=" form-control-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="nombre" placeholder="Ingresa Nombre completo" value="{{ $datos->nombre }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Apellido</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="apellido" placeholder="Ingrese Apellidos Completos" value="{{ $datos->apellido }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Cedula</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="cedula" placeholder="Ingrese No de Cedula" value="{{ $datos->cedula }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Fecha de Nacimiento</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="date" name="fnacimiento" value="{{ $datos->fnacimiento }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Dirección</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="direccion" placeholder="Ingrese dirección" value="{{ $datos->direccion }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Cuidad</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="cuidad" placeholder="Ingrese Cuidad de residencia" value="{{ $datos->cuidad }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Genero</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <select name="genero" class="form-control">
                            <option value="">Seleccionar</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Titulo</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="text" name="titulo" placeholder="Ingrese Titulo" value="{{ $datos->titulo }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class=" form-control-label">Teléfono</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input class="form-control" type="tel" name="telefono" placeholder="Ingrese No de telefono" value="{{ $datos->telefono }}">
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