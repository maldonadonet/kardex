@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="card text-left mt-5">
                <div class="card-body">
                    <h4 class="card-title">Actualización de contraseña</h4>
                    <p class="card-text">Bienvenido al módulo de actualización de contraseña del sistema administrativo Kardex 1.0.0, solo te solicitamos que nos indiques tu nueva contraseña para el inicio de sesión del sistema.</p>
                    {!! Form::open(['url' => 'update-clave', 'method'=>'POST']) !!}
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