<?php

include "../db.php";

if($_POST){

    $nombre = $_POST["nombre"];
    
    if(isset($_POST["id"])){
        $id=$_POST["id"];
        $consulta = "UPDATE categorias SET nombre = '$nombre' WHERE id = $id";
    
    }else{
        $consulta ="INSERT INTO categorias (nombre) VALUES('$nombre')";
    }
    
    
    $res = $db->query($consulta);

    if($res){
        echo "ok";
    }else{
        echo "error";
    }

}

?>