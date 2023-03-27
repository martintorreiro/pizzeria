function cargarForm(form) {
  $("body").append("<div id='modal-formulario'></div>");
  $("#modal-formulario").load("formularios/" + form, () => {
    $("#modal-formulario").addClass("modal");
    tinymce.init({ selector: "textarea" });
  });
}

function cerrarForm() {
  $("#modal-formulario").remove();
  tinyMCE.remove();
}

function enviarForm(service, tabla) {
  console.log(service);
  tinymce.triggerSave();

  const fdata = new FormData($("#formulario-manejado").get(0));

  $.ajax({
    url: "service/" + service,
    type: "POST",
    data: fdata,
    processData: false,
    contentType: false,
    beforeSend: function () {
      //something before send
    },
    success: function (data) {
      console.log("enviado", data);
      cerrarForm();
      cargarTabla(tabla);
    },
  });
  return false;
}

function borrarFila(id, tabla) {
  $("#confirmacion-modal").remove();
  console.log(event);
  $ejeY = event.pageY;
  $ejeX = event.pageX;

  $("body").append(
    "<div id=confirmacion-modal><p>Esta seguro de que desea borrar esta fila?</p><button id='confirmar-borrado'>Confirmar</button></div>"
  );
  $("#confirmacion-modal").css({
    "background-color": "white",
    position: "absolute",
    width: "200px",
    top: $ejeY,
    left: $ejeX - 200,
  });

  $("#confirmar-borrado").click(function () {
    $.post("service/eliminar-fila.php", { id, tabla }, function (data) {
      console.log(data);

      $("#confirmacion-modal").remove();
      cargarTabla(tabla);
    });
  });
}
