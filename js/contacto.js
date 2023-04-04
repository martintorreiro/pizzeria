function enviarComentario() {
  event.preventDefault();
  console.log(
    "---inicio",
    event.target.elements.email.value,
    event.target.elements.mensaje.value
  );
  console.log("ff");
  $.post(
    "includes/enviarEmail.php",
    {
      correo: event.target.elements.email.value,
      mensaje: event.target.elements.mensaje.value,
    },
    function (data) {
      console.log(data);
      if (data == "ok") {
        $(".contact form input").val("");
        $(".contact form textarea").val("");
        $(".contact form").append(
          "<p class='respuesta-correo'>Correo enviado. Nos pondremos en contacto para en el correo indicado para darle una respuesta</p>"
        );
      }
    }
  );
}
