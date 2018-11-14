/** Inicio Código de Sidebar */
$("#side-proveedores-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(proveedor) {
    $('#update-nombre').val(proveedor.nombre);
    $('#update-correo').val(proveedor.correo);
    $('#update-telefono').val(proveedor.telefono);
    $('#update-telefono_fax').val(proveedor.telefono_fax);
    $('#form-update').attr('action', '/admin/proveedores/' + proveedor.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/proveedores/' + id);
    $('#modal-delete').modal('show');
}

//Datatable
var table = $('#example').DataTable({
    language: tabla_traducida
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