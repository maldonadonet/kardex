@extends('layouts.base')

@section('content')

     <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-info" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>


    @if(Auth::user()->activacion == 0)
        <p>Cuenta no activada</p>
    @else
        <p>Cuenta activada</p>
    @endif

@endsection