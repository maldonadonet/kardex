<div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$user->id}}">
  {{Form::open(array('action'=>array('AdminController@destroy',$user->id),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>eliminarción de usuario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea eliminar al Alumno: {{ $user->name }} <br>[No se puede deshacer]?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
  {{Form::Close()}}
</div>
