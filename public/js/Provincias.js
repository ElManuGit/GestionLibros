/** Inicio Código de Sidebar */
$("#side-provincias-li").addClass("active");
/** Fin Código de Sidebar */

function completar_campos(provincia) {
    $('#nombre').val(provincia.nombre);
    $('#pais_id').val(provincia.pais_id).trigger("change");
    $('#form-update').attr('action', '/admin/provincias/' + provincia.id);
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