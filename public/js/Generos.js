/** Inicio Código de Sidebar */
$("#side-generos-li").addClass("active");
/** Fin Código de Sidebar */

function completar_campos(genero) {
    $('#nombre').val(genero.nombre);
    $('#update-descripcion').val(genero.descripcion);
    $('#form-update').attr('action', '/admin/generos/' + genero.id);
    console.log(genero);
    $('#modal-update').modal('show');
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