function cargarCarrito() {
  /*  $("#tabla-carrito").load("service/cargar-carro.php", function () {
    $(".añadircarrito").off();
    $(".cantidad-producto").off();
    $(".añadirN").off();
    eventosCarrito();
  }); */
  $("#contenido-carrito").load("includes/cargarCarrito.php", function () {
    /* $(".positive-integer").numeric({
      negative: false,
      decimal: false,
    }); */
    $(".añadircarrito").off();
    $(".cantidad-producto").off();
    $(".añadirN").off();
    eventosCarrito();
  });
}

//---------ABRIR Y CERRAR CARRITO

$("#carrito").click(function () {
  $(this).toggleClass("abierto");
  $("#contenido-carrito").toggleClass("disp-none");

  if ($(this).hasClass("abierto")) {
    $(document).click(function detectaClick(e) {
      if (
        !$("#carrito").is(e.target) &&
        !$("#carrito").has(e.target).length &&
        !$("#contenido-carrito").is(e.target) &&
        !$("#contenido-carrito").has(e.target).length
      ) {
        console.log("out");
        $("#carrito").removeClass("abierto");
        $("#contenido-carrito").addClass("disp-none");
        $(document).off();
      } else if (
        !$("#carrito").is(e.target) &&
        !$("#carrito").has(e.target).length
      ) {
        $(document).off();
      }
    });
  }
});
