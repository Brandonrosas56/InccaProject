// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable();
});

$('#dataTable').DataTable({

  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por pagina",
    "zeroRecords": "No se encontraron resultados en su busqueda",
    "searchPlaceholder": "Buscar registros",
    "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
    "infoEmpty": "No existen registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }
  }
});

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

