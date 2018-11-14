/** Inicio Código de Sidebar */
$("#side-clientes-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(cliente) {
    $('#update-nombre').val(cliente.nombre);
    $('#update-apellido').val(cliente.apellido);
    $('#update-fecha_nacimiento').val(cliente.fecha_nacimiento);
    $('#update-email').val(cliente.email);
    $('#update-telefono').val(cliente.telefono);
    $('#update-telefono_alternativo').val(cliente.telefono_alternativo);
    $('#update-tipo_documento').val(cliente.tipo_documento);
    $('#update-numero_documento').val(cliente.numero_documento);
    $('#update-direccion').val(cliente.direccion);
    $('#form-update').attr('action', '/admin/clientes/' + cliente.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/clientes/' + id);
    $('#modal-delete').modal('show');
}

//Datatable
var table = $('#example').DataTable({
    language: tabla_traducida,
    responsive: true
});

$('a.toggle-vis').on('click', function (e) {
    e.preventDefault();
    // Get the column API object
    var column = table.column($(this).attr('data-column'));
    // Toggle the visibility
    column.visible(!column.visible());
});

$('#example tbody').on('mouseenter', 'td', function () {
    var colIdx = table.cell(this).index().column;
    $(table.cells().nodes()).removeClass('highlight');
    $(table.column(colIdx).nodes()).addClass('highlight');
});


// Enviar datos. Manejo de imagen
function mandar(tipo_form) { //tipo_form puede ser create o update

    var redireccion = "/admin/clientes/";

    //// Este método sirve para ver el contenido del formdata
    //for (var pair of formData.entries())
    //{
    // console.log(pair[0]+ ', '+ pair[1]); 
    //}

    var form = $("#form-" + tipo_form); 
    var url = form.attr("action"); 
    var token = $("#token-" + tipo_form).val(); 
    var formData = new FormData(document.getElementById("form-" + tipo_form));

    if ((tipo_form === 'create') && (imagen_cropie.create !== '')) {
        formData.append('imagen', imagen_cropie.create)
    } else if (imagen_cropie.update !== '') {
        formData.append('imagen', imagen_cropie.update)
    }

    $.ajax(url, {headers: {"X-CSRF-TOKEN": token}, 
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            window.location.href = redireccion;
        },
        error: function () {
            console.log('Error de carga');
        }
    });

}