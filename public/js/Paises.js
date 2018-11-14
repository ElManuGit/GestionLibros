/** Inicio Código de Sidebar */
$("#side-paises-li").addClass("active");
/** Fin Código de Sidebar */

function completar_campos(pais) {
    $('#update-nombre').val(pais.nombre); //Numeral es para identificar el id. Para clases se usa punto en vez de numeral.
    $('#form-update').attr('action', '/admin/paises/' + pais.id); //Modifica atributos "attr"
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