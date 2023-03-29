<?php
    include "header.php";
   
?>

<section id="categorias" >

<header><h1>Editar Categorías</h1></header>

    <div class="contenedor-tablas">

        
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

</section>

<script>
cargarTabla("categorias")
</script>

<?php
    include "footer.php";
?>