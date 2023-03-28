<?php
    include "header.php";
   
?>

<main id="categorias" class="seccion-admin">

    <div class="contenedor-tablas">

    
        <h2>Editar Categorías</h2>
        <button onClick="cargarForm('categorias.php')">Crear nueva categoria</button>
        <table>
            <thead>
                <tr>
                    <th>Categoria</th>
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
cargarTabla("categorias")
</script>

<?php
    include "footer.php";
?>