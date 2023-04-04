function descargarPdf(){
    const carta = $(".lista-categorias").html()

    $.post( "includes/descargarPdf.php",{carta:carta}, function( data ) {
        console.log(data)
    });

}