/** Inicio Código de Sidebar */
$("#side-localidades-li").addClass("active");
/** Fin Código de Sidebar */

function completar_campos(localidad) {
    $('#nombre').val(localidad.nombre);
    $('#pais_id').val(localidad.provincia.pais_id).trigger("change");
    $('#provincia_id').val(localidad.provincia_id).trigger("change");
    $('#codigo_postal').val(localidad.codigo_postal);
    $('#form-update').attr('action', '/admin/localidades/' + localidad.id);
    $('#modal-update').modal('show');
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