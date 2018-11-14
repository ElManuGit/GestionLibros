<<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar género</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-update" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>Detalles del registro</h3>
                      <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" id="nombre" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                    </div>
                    <div class="form-group">
                        <label>Descripción:</label>
                        <textarea name="descripcion" id="update-descripcion" class="form-control" rows="7" placeholder="Campo requerido" required></textarea>
                    </div>   
                    <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_update').click()">Guardar cambios</button>
            </div>
        </div>          
    </div>
</div>