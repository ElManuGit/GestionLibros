<div id="modal-delete" class="modal fade modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Deshabilitar editorial</h4>
            </div>
            <div class="modal-body">
                <form id="form-delete" action="" method="POST" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4 class="box-heading text-center">La editorial ya no estará visible para los clientes</h4>
                    <h4 class="box-heading text-center">¿Está seguro de querer deshabilitar esta editorial?</h4>
                    <button id="boton_submit_delete" type="submit" class="btn btn-primary hide"></button>
                </form> 
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-outline" onclick="$('#boton_submit_delete').click()">Deshabilitar editorial</button>
            </div>
        </div>
    </div>
</div>