<?php
    include "header.php";   
?>

<section id="galeria">

<header><h1>Editar Galería</h1></header>

    <div class="contenedor-tablas">

        

        <div id="añadir-galeria">
            <form action="" enctype="multipart/form-data">
                <input type="hidden" name="tabla" value="galeria">
                <label for="imagenes">Añadir Imagen</label>
                <input type="file" id="imagenes" name="imagenes[]" accept=".jpg, .jpeg, .png" multiple>
            </form>
        </div>

        <div id="tabla"></div>
    </div>

    </section>

<script>
cargarTabla("galeria")
manejarGaleria()
</script>
<?php
    include "footer.php";
?>