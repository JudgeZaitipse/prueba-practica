$('#form').on('submit', function(e) {
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
            message: "Exito ! <b>Datos Guardados Correctamente</b>"
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
            document.getElementById("form").reset();
          }, 5000);
        }else{
          console.log(response);
           $.notify({
            icon: "add_alert",
            message: "Error ! Por favor Ingrese todos los campos <b> </b>"
          }, {
            type: 'danger',
            timer: 4000,
            placement: {
              from: 'top',
              align: 'right'
            }
          });
          setTimeout(function() {
          }, 5000);

        }
      },
      error: function(error){
          toastr.error('Validation error!', 'No se pudo Añadir los datos<br>' + error, {timeOut: 5000});
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
