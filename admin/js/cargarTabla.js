function cargarTabla(tabla) {
  $.post(`service/cargar-tabla.php?tabla=${tabla}`, function (data) {
    $("#tabla").html(data);
  });
}
