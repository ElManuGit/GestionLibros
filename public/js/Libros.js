/** Inicio Código de Sidebar */
$("#side-libros-li").addClass("active");
/** Fin Código de Sidebar */


function completar_campos(autor) {
    $('#titulo-update').val(libro.titulo);
    $('#isbn-update').val(libro.isbn);
    $('#genero-update').val(provincia.pais_id).trigger("change");
    $('#form-update').attr('action', '/admin/autores/' + autor.id);
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/libros/' + id);
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


function isValidISBN (isbn) {
  isbn = isbn.replace(/[^\dX]/gi, '');
  if(isbn.length != 10){
    return false;
  }
  var chars = isbn.split('');
  if(chars[9].toUpperCase() == 'X'){
    chars[9] = 10;
  }
  var sum = 0;
  for (var i = 0; i < chars.length; i++) {
    sum += ((10-i) * parseInt(chars[i]));
  };
  return ((sum % 11) == 0);
}
