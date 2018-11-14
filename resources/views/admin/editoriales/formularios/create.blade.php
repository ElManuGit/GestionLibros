<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar editorial</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/editoriales" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                      <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                        <label>Teléfono:</label>
                        <input name="telefono" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                        <label>Correo:</label>
                        <input name="correo" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                        <label>Sitio Web:</label>
                        <input name="sitio_web" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                    </div>
                       
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Guardar</button>
            </div>
        </div>          
    </div>
</div>