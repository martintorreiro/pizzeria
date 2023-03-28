<?php
    include "header.php";
   
?>

<main id="platos" class="seccion-admin">

    <div class="contenedor-tablas">

    
        <h2>Editar Categorías</h2>
        <button onClick="cargarForm('platos.php')">Añadir nuevo plato</button>
        <table>
            <thead>
                <tr>
                    <th>Plato</th>
                    <th>Precio</th>
                    <th>Foto</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="tabla">

            </tbody>
        </table>
    </div>

</main>

<script>
cargarTabla("platos")
</script>

<?php
    include "footer.php";
?>