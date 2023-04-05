function cargarCarrito() {

  $("#contenido-carrito").load("includes/cargarCarrito.php", function () {
    $(".añadircarrito").off();
    $(".cantidad-producto").off();
    $(".añadirN").off();
    eventosCarrito() ;
  });
}

//---------ABRIR Y CERRAR CARRITO

$("#carrito").click(function () {
  $(this).toggleClass("abierto");
  $("#contenido-carrito").toggleClass("oculto");

  if ($(this).hasClass("abierto")) {
    $(document).click(function (e) {
      if (
        !$("#carrito").is(e.target) &&
        !$("#carrito").has(e.target).length &&
        !$("#contenido-carrito").is(e.target) &&
        !$("#contenido-carrito").has(e.target).length
      ) {
        $("#carrito").removeClass("abierto");
        $("#contenido-carrito").addClass("oculto");
        $(document).off();
      } else if (
        $("#contenido-carrito").is(e.target) &&
        $("#contenido-carrito").has(e.target).length
      ) {
        $(document).off();
      }
    });
  }
});

//--------AÑADIR AL CARRITO

function añadirCarrito(id,cantidad=1){
  let body = {id:id};
if(cantidad == "set"){
  body.cantidad = event.target.value
  body.pisar = "prueba"
}else{
  body.cantidad = cantidad;
}
  $.post("includes/añadirCarrito.php", body, function (data) {
    console.log(data)
    if (data == "OK") {
      $("#cantidadCarrito").load("service/carritoCantidad.php");
      cargarCarrito();
    } else {
    }
  });
}

function eventosCarrito() {
  $(".añadircarrito").click(function () {
    
    id_producto = $(this).data("id_producto");
    cantidad = $(this).data("cantidad");
    $.post("service/addCart.php", { id_producto, cantidad }, function (data) {
      if (data == "OK") {
        $("#cantidadCarrito").load("service/carritoCantidad.php");
        cargarCarrito();
      } else {
      }
    });
  });

  $(".cantidad-producto").change(function () {
    id_producto = $(this).data("id_producto");
    cantidad = $(this).val();
    console.log("----", cantidad, id_producto);
    $.post("service/setCart.php", { id_producto, cantidad }, function (data) {
      if (data == "OK") {
        console.log("terminado ok");
        $("#cantidadCarrito").load("service/carritoCantidad.php");
        cargarCarrito();
      } else {
      }
    });
  });

  $(".añadirN").submit(function (e) {
    e.preventDefault();
    id_producto = e.target.elements.id_producto.value;
    cantidad = e.target.elements.cantidad.value;

    console.log("submit", id_producto, cantidad);
    $.post("service/addCart.php", { id_producto, cantidad }, function (data) {
      if (data == "OK") {
        console.log("terminado ok");
        $("#cantidadCarrito").load("service/carritoCantidad.php");
        cargarCarrito();
      } else {
      }
    });
  });
}
