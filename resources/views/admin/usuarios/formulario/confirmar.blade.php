<div id="modal-borrar" class="modal fade modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Deshabilitar usuario</h4>
            </div>
            <div class="modal-body">
                <form id="form-borrar" action="" method="POST" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4 class="box-heading">¡Atención!</h4>
                    <p>¿Está seguro de deshabilitar el usuario?</p>
                    <button id="boton_submit_borrar" type="submit" class="btn btn-primary hide"></button>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-outline" onclick="$('#boton_submit_borrar').click()">Deshabilitar usuario</button>
            </div>
        </div>
    </div>
</div>