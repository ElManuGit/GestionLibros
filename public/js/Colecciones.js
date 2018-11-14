/** Inicio Código de Sidebar */
$("#side-colecciones-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(coleccion) {
    $('#update-nombre').val(coleccion.nombre);
    $('#update-tipo').val(coleccion.apellido);
    $('#update-descripcion').val(coleccion.biografia);
    $('#form-update').attr('action', '/admin/colecciones/' + coleccion.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/colecciones/' + id);
    $('#modal-delete').modal('show');
}

function activar_panel_colecciones() {
    $('#principal').addClass('active');
    $('#cabecera-principal').addClass('active');
    $('#rootwizard .progress-bar').css({width: '33%'});

    $('#secundario').removeClass('active');
    $('#cabecera-secundaria').removeClass('active');

    $('#finalizar').removeClass('active');
    $('#cabecera-finalizar').removeClass('active');
}

function activar_panel_libros() {
    $('#secundario').addClass('active');
    $('#cabecera-secundaria').addClass('active');
    $('#rootwizard .progress-bar').css({width: '66%'});

    $('#principal').removeClass('active');
    $('#cabecera-principal').removeClass('active');

    $('#finalizar').removeClass('active');
    $('#cabecera-finalizar').removeClass('active');

}

function activar_panel_finalizar() {
    if (!$('#nombre').val()) {
        alert('Debe completar el nombre de la colección');
        activar_panel_colecciones();
        $('#nombre').focus();
        return false;
    } else if (!$('#descripcion').val()) {
        alert('Debe completar la descripción de la colección');
        activar_panel_colecciones();
        $('#descripcion').focus();
        return false;
    } else if (!$('#tipo').val()) {
        alert('Debe completar el tipo de colección');
        activar_panel_colecciones();
        $('#tipo').focus();
        return false;
    } else {
        $('#finalizar').addClass('active');
        $('#cabecera-finalizar').addClass('active');
        $('#rootwizard .progress-bar').css({width: '100%'});

        $('#principal').removeClass('active');
        $('#cabecera-principal').removeClass('active');

        $('#secundario').removeClass('active');
        $('#cabecera-secundaria').removeClass('active');
    }
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

var libros_agregar = [];

function actualizar_array(id) {
    if (libros_agregar.indexOf(id) >= 0) {
        libros_agregar.splice(libros_agregar.indexOf(id), 1);
        $("#check-" + id).prop("checked", false);
        $("#libros").val(libros_agregar);
        $('#cantidad_libros').val(libros_agregar.length);
    } else {
        libros_agregar.push(id);
        $("#check-" + id).prop("checked", true);
        $("#libros").val(libros_agregar);
        $('#cantidad_libros').val(libros_agregar.length);
    }
}

//Setear valores para el resumen
function asignar_valores() {
    var variable = document.getElementById('nombre').value;
    $('#nombre-final').val(variable);
    var variable = document.getElementById('tipo').value;
    $('#tipo-final').val(variable);
    var variable = document.getElementById('descripcion').value;
    $('#descripcion-final').val(variable);
}                                   