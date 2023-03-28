<?php
    include "header.php";   
?>

<main id="galeria" class="seccion-admin">



    <h2>Editar Galería</h2>

    <div id="añadir-galeria">
        <form action="" enctype="multipart/form-data">
            <input type="hidden" name="tabla" value="galeria">
            <label for="imagenes">Añadir Imagen</label>
            <input type="file" id="imagenes" name="imagenes[]" accept=".jpg, .jpeg, .png" multiple>
        </form>
    </div>

    <div id="tabla"></div>

</main>

<script>
cargarTabla("galeria")
manejarGaleria()
</script>
<?php
    include "footer.php";
?>