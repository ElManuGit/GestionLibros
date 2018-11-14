<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar usuario</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-update" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input id="token-update" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>Detalles de la Cuenta</h3>
                    <br>
                    <div class="form-group">
                        <label>Correo electrónico:</label>
                        <input id="update-email" name="email" type="email" maxlength="50" class="form-control" aria-describedby="emailHelp" placeholder="campo requerido" required>                            
                    </div>                       
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombre completo:</label>
                        <input id="update-name" name="name" type="text" maxlength="50" class="form-control" placeholder="campo requerido" required>
                    </div>
                    
                    <input type="checkbox" class="checkbox-usuario-habilitar" name="estado" id="habilitar-usuario{{$usuario->id}}"/> Habilitar
                    
                    
                    
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