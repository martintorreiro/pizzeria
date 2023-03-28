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
  tinymce.triggerSave();
  console.log(tabla);
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

  $ejeY = event.pageY;
  $ejeX = event.pageX;
  event.stopPropagation();
  $("body").append(
    "<div id=confirmacion-modal><p>Esta seguro de que desea borrar esta fila?</p><button id='confirmar-borrado'>Confirmar</button></div>"
  );
  $("#confirmacion-modal").css({
    width: "200px",
    top: $ejeY,
    left: $ejeX - 200,
  });

  $(document).click(function (e) {
    if (
      !$("#confirmacion-modal").is(e.target) &&
      !$("#confirmacion-modal").has(e.target).length
    ) {
      $("#confirmacion-modal").remove();
      $(document).off();
    }
  });

  $("#confirmar-borrado").click(function () {
    $.post("service/eliminar-fila.php", { id, tabla }, function (data) {
      $(document).off();
      $("#confirmacion-modal").remove();
      cargarTabla(tabla);
    });
  });
}

const cargarPreview = (input) => {
  $("#contenedor-preview").empty();
  if (input.files && input.files[0]) {
    for (let i = 0; i < input.files.length; i++) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#contenedor-preview").append(
          `<img src='${e.target.result}' alt='preview'>`
        );
      };

      reader.readAsDataURL(input.files[i]);
    }
  }
};

function manejarGaleria() {
  $("#añadir-galeria form").submit(function (e) {
    e.preventDefault();
    const fData = new FormData($("#añadir-galeria form").get(0));

    $.ajax({
      url: "service/categorias.php",
      type: "POST",
      data: fData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        //something before send
      },
      success: function (data) {
        console.log("enviado", data);
        cargarTabla("galeria");
      },
    });
    console.log("submit");
  });
  $("#añadir-galeria input").change(function () {
    console.log("galeria", this);

    $("#añadir-galeria form").submit();
  });
}
