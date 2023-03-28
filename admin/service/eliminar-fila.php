<?php

include "../db.php";

if($_POST){
    
    $id = $_POST["id"];
    $tabla = $_POST["tabla"];
    
    if($tabla=="platos"){
        $res = $db->query("SELECT * FROM platos WHERE id = $id");
        $row = $res->fetch_assoc();
        $imagen = $row["foto"];
        unlink("../../public/images/platos/$imagen");
        echo "ok";
    }

    $consulta = "DELETE FROM $tabla WHERE id=$id";
    $res = $db->query($consulta);
    
    if($res){
        echo "ok";
    }else{
        echo "error";
    }
}

?>