/** Inicio Código de Sidebar */
$("#side-autores-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(autor) {
    $('#update-nombre').val(autor.nombre);
    $('#update-apellido').val(autor.apellido);
    $('#update-biografia').val(autor.biografia);
    $('#form-update').attr('action', '/admin/autores/' + autor.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/autores/' + id);
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