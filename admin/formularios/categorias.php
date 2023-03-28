<?php
include "../db.php";

if(isset($_GET["editar"])){
    $id=$_GET["id"];
    $res = $db->query("SELECT * FROM categorias WHERE id = $id");
    $row = $res->fetch_assoc();
    $nombre = $row['nombre'];
}else{
    $nombre="";
}


?>

<div class="formulario_estandar">
    <div class="cabecera">
        <h2 class="marg-b-20"><?php if(isset($_GET["editar"])){ echo "Editar";}else{echo "Crear";} ?> Categoria</h2>
    </div>
    <form id="formulario-manejado" onSubmit="return enviarForm('categorias.php','categorias')">

        <input type="hidden" name="tabla" value="categorias">
        <div class="form_body">

            <?php if(isset($_GET["editar"])){ echo "<input type='hidden' name='id' value= $id>";} ?>
            <div class="form_group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>">
            </div>

        </div>

        <div class="controls">
            <button>Guardar</button>
            <button onClick="cerrarForm()" type="button">Cancelar</button>
        </div>
    </form>
</div>