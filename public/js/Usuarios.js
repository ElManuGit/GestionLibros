$("#side-usuarios-li").addClass("active");

function completar_campos(usuario, nombre_rol) {
    $('#rol_usuario').val(nombre_rol).trigger("change");
    $('#update-name').val(usuario.name);
    $('#update-email').val(usuario.email);
    if (usuario.estado){
        $("#habilitar-usuario" + usuario.id).prop("checked", true);
    }
    $('#form-update').attr('action', '/admin/usuarios/' + usuario.id);
   
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-borrar').attr('action', '/admin/usuarios/' + id);
    $('#modal-borrar').modal();
}


function actualizar_estado(valor, usuario_id) {
    $.ajax({
        url: '/admin/usuarios/' + usuario_id, //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
        data: {
            publicado: valor, //estructura JSON
            _token: token
        },
        type: 'PUT',
        dataType: 'json',
        success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
        }
    });
    if (valor) {
        $('#span-moderacion').html('Moderado');
        $('#span-moderacion').css("color", "#229954");
    }
}
