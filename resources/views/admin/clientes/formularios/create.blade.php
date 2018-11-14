<div class="modal fade" id="modal-crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar cliente</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form id="form-create" action="/admin/clientes" method="POST" enctype="multipart/form-data">
                    <input id="token-create" type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h3>Detalles de la Cuenta</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>                            
                    </div>
                    <div class="form-group">
                        <label>Apellido:</label>
                        <input name="apellido" type="text" maxlength="50" class="form-control" placeholder="Campo requerido" required>                            
                    </div>
                    <div class="form-group">
                        <label>Correo electrónico:</label>
                        <input name="email" type="email" maxlength="50" class="form-control" aria-describedby="emailHelp" placeholder="Campo requerido" required>                            
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input name="password"  type="password" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                    </div>
                    <div class="form-group">
                        <label>Confirmar password:</label>
                        <input name="password_confirmation" type="password" maxlength="50" class="form-control" placeholder="Campo requerido" required>
                    </div>         
                  
                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Registrar cliente</button>
            </div>
        </div>          
    </div>
</div>

