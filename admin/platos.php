<?php
    include "header.php";
?>

<section id="platos">

<header><h2>Editar Platos</h2></header>


    <div class="contenedor-tablas">

        

        <button onClick="cargarForm('platos.php')">Añadir nuevo plato</button>

        <table>
            <thead>
                <tr>
                    <th>Plato</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="tabla">

            </tbody>
        </table>
    </div>

</section>

<script>
cargarTabla("platos")
</script>

<?php
    include "footer.php";
?>