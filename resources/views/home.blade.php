@extends('layouts.base')

@section('content')

    <h1>Bienvenido al Sistema</h1>

    <div class="container">
        <div class="row">
            <div class="card text-left mt-5">
                <div class="card-body">
                    <h4 class="card-title">Activación de cuenta</h4>
                    <p class="card-text">Al crearse tu cuenta de usuario el sistema te asigno una contraseña temporal que es "123456", ahora deberas configurar tu contraseña para que puedas acceder al sistema.</p>
                    {!! Form::open(['url' => 'actualizacion', 'method'=>'POST']) !!}
                    {{Form::token()}}

                    <div class="form-group">
                        <label class=" form-control-label">Contraseña</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                            <input class="form-control" type="password" name="password" placeholder="Ingresa Contraseña de Acceso">
                            <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="submit" value="Actualizar contraseña" class="btn btn-primary rounded">
                        </div>
                    </div>

                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection