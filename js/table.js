// Traducción de la libreria DATATABLE con JQUERY
$(document).ready(() => {

        $(".dataTable").DataTable({
            "pagingType": "simple",
            language:{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ Registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "<div class='input-field input-field-table'><input type='text' class='input-control info-title'><label for='searchs' class='label-text'>Buscar </label><span id='spanMostrar' class='form-clear d-none'><i id='iconMostrar' class='icon-prefix-final fas fa-search prefix'></i></span></div>",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "<i class='fas fa-chevron-right'></i>",
                    "sPrevious": "<i class='fas fa-chevron-left'></i>"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
        }); 
    });