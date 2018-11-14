/** Inicio Código de Sidebar */
$("#side-editoriales-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(editorial) {
    $('#update-nombre').val(editorial.nombre);
    $('#update-telefono').val(editorial.telefono);
    $('#update-correo').val(editorial.correo);
    $('#update-sitio_web').val(editorial.sitio_web);
    $('#form-update').attr('action', '/admin/editoriales/' + editorial.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/editoriales/' + id);
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

$('.input_archivo').fileinput({
    fileActionSettings: {
        showDownload: false,
        showRemove: true,
        showUpload: false
    },
    theme: 'fa',
    language: 'es',
    showUpload: false,
    uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'jpeg'],
    maxFileSize: 3072
});