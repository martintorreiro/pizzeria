<?php
include "../db.php";

if(isset($_GET["editar"])){
    $id=$_GET["id"];
    $res = $db->query("SELECT * FROM platos WHERE id = $id");
    $row = $res->fetch_assoc();
    $nombre = $row['nombre'];
    $precio=$row['precio'];
    $foto=$row['foto'];
    $categoria=$row["id_categoria"];

}else{
    $nombre="";
    $precio="";
    $foto="";
    $categoria="";
}


?>

<div class="formulario_estandar">
    <div class="cabecera">
        <h2 class="marg-b-20"><?php if(isset($_GET["editar"])){ echo "Editar";}else{echo "Crear";} ?> Categoria</h2>
    </div>
    <form id="formulario-manejado" onSubmit="return enviarForm('categorias.php','platos')">

        <input type="hidden" name="tabla" value="platos">
        <div class="form_body">

            <?php if(isset($_GET["editar"])){ echo "<input type='hidden' name='id' value=$id>";} ?>
            <div class="form_group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>">
            </div>

            <div class="form_group">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value="<?php echo $precio?>">
            </div>

            <div class="form_group">
                <label for="categoria">Categoría: </label>
                <select name="categoria" id="categoria">
                    <option value="">--Seleccionar Categoria--</option>
                    <?php

                    $resCat = $db->query("SELECT * FROM categorias");
                        while($rowCat = $resCat->fetch_assoc()){
                            if($rowCat["id"]==$categoria){
                                echo "<option selected value='".$rowCat['id']."'>".$rowCat['nombre']."</option>";
                            }else{
                                echo "<option value='".$rowCat['id']."'>".$rowCat['nombre']."</option>";
                            }
                        }
                    ?>

                </select>
            </div>

            <div class="imagenes_producto">
                <h4>Imagen Plato</h4>
                <div class="form_group form_group__files">
                    <label for="imagen">Añadir Imagen</label>
                    <input onChange="cargarPreview(this)" type="file" id="imagen" name="imagen"
                        accept=".jpg, .jpeg, .png">
                    <div id="contenedor-preview">

                    </div>
                </div>

                <?php if(isset($_GET["editar"])){
                    echo "<div class='imagenes_guardadas'>
                            <h5>Imagenes guardadas</h5>
                            <div class='contenedor_imagenes'>

                            </div>
                        </div>";
                }
                ?>

            </div>

        </div>

        <div class="controls">
            <button>Guardar</button>
            <button onClick="cerrarForm()" type="button">Cancelar</button>
        </div>
    </form>
</div>