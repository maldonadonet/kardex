@extends('layouts.base')

@section('content')

<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-info" role="alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="col-md-4">
                <strong class="card-title">Usuarios activos en el sistema.</strong>
            </div>
            <div class="col-md-8 text-right">
                <a href="admin/create" class="btn btn-outline-info"><span class="menu-icon fa fa-plus-square"></span> Agregar nuevo usuario</a>
            </div>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Tipo usuario</th>
                        <th>Estatus</th>
                        <th>Cuenta</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tipo_usuario }}</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            @if($user->activacion == 0)
                                <span class="alert alert-warning">Pendiente de activacion</span>
                            @else
                                <span class="alert alert-info">Activada</span>
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td class="d-flex align-items-center m-auto">
                            <a href="{{URL::action('AdminController@edit',$user->id)}}" class="btn btn-warning rounded-bottom"><span class="menu-icon fa fa-edit (alias)"></span></a>
                            <a href="#" data-target="#modal-delete-{{$user->id}}" data-toggle="modal" class="btn btn-danger rounded-bottom">
                                <span class="menu-icon fa fa-trash-o"></span>
                            </a>
                        </td>
                    </tr>
                    @include('admin.modal-delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@push('scripts')

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    
@endpush