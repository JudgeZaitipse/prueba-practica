$(document).ready(function() {
  $('#datatables').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "Todo"]
    ],
    responsive: true,
    language: {
      "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
    }
  });
});

 // data Update modal / info
 $(document).on('click', '.del-fact', function() {
 	// Datos Cliente
 	$('#id_cliente').val($(this).data('id-cliente'));
 	$('#nombre_cliente').val($(this).data('nombre-cliente'));
 	$('#apellido_cliente').val($(this).data('apellido-cliente'));
 	$('#direcion-cliente').val($(this).data('apellido-cliente'));
 	$('#cedula-cliente').val($(this).data('cedula-cliente'));
 	$('#telefono-cliente').val($(this).data('telefono-cliente'));
 	$('#celular-cliente').val($(this).data('celular-cliente'));
 	$('#correo-cliente').val($(this).data('correo-cliente'));

 	// datos Vehiculo 
 	$('#vehiculo_id').val($(this).data('vehiculo-id'));
 	$('#vehiculo-placa').val($(this).data('vehiculo-placa'));
 	$('#vehiculo-marca').val($(this).data('vehiculo-marca'));
 	$('#vehiculo-modelo').val($(this).data('vehiculo-modelo'));
 	$('#vehiculo-color').val($(this).data('vehiculo-color'));
 	$('#vehiculo-valor').val($(this).data('vehiculo-valor'));
    $('#modal_editar').modal('show');
});

// Actualizar Informacion 
$('#form_actualizar').on('submit', function(e) {
  $from = $(this); //captura del formulario
  var url_from = $from.attr('action'); // captura de la url
  e.preventDefault();
  var formData = new FormData(this);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
      type:'POST',
      url:url_from,
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(response){
        if (response == 'true') {
          $.notify({
            icon: "add_alert",
            message: "Exito ! <b>Datos Actualizados Correctamente</b>"
          }, {
            type: 'success',
            timer: 4000,
            placement: {
              from: 'top',
              align: 'right'
            }
          });
          $('#modal_editar').modal('hide');
          setTimeout(function() {
            location.reload();
            document.getElementById("form_actualizar").reset();
          }, 3000);
        }else{
           $.notify({
            icon: "add_alert",
            message: "Error !<b> Datos no encontrados </b>"
          }, {
            type: 'danger',
            timer: 4000,
            placement: {
              from: 'top',
              align: 'right'
            }
          });
          setTimeout(function() {
          }, 3000);

        }
      },
      error: function(error){
          toastr.error('Validation error!', 'No se pudo Actualizar los datos<br>' + error, {timeOut: 5000});
      }
  });
});

// Desactivar Factura 
$('#form_eliminar').on('submit', function(e) {
  $from = $(this); //captura del formulario
  var url_from = $from.attr('action'); // captura de la url
  e.preventDefault();
  var formData = new FormData(this);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
      type:'POST',
      url:url_from,
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(response){
        if (response == 'true') {
          $.notify({
            icon: "add_alert",
            message: "Exito ! <b>Factua Eliminada Correctamente </b>"
          }, {
            type: 'success',
            timer: 4000,
            placement: {
              from: 'top',
              align: 'right'
            }
          });
          setTimeout(function() {
            location.reload();
          }, 3000);
        }else{
           $.notify({
            icon: "add_alert",
            message: "Error !<b>Factura no encontrada </b>"
          }, {
            type: 'danger',
            timer: 4000,
            placement: {
              from: 'top',
              align: 'right'
            }
          });
          setTimeout(function() {
          }, 3000);

        }
      },
      error: function(error){
          toastr.error('Validation error!', 'No se pudo Eliminar los datos<br>' + error, {timeOut: 5000});
      }
  });
});


// metodos de validacion 
function val_numeros(e){
  var tecla = e.keyCode;
  if (tecla==8 || tecla==9 || tecla==13){
    return true;
  }

  var patron =/[0-9]/;
  var tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}

function val_texto(e) { 
  var tecla = e.keyCode; 
  if (tecla==8 || tecla==13 || tecla==32) return true; 
  var patron =/[A-Za-z\sáéíóú]/;
  var te = String.fromCharCode(tecla); 
  return patron.test(te); 
}

