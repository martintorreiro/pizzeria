<?php
include "../db.php";


if (isset($_POST['id'])){

    $id=$_POST['id'];
    
    if (isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
        
    }else{
        $cantidad = 1;
    }

    if (!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = array();
    }

    $actualizado=false;
    foreach($_SESSION['carrito'] as $clave=>$valor){

        if ($valor['id']==$id){
            
            if($cantidad=="delete"){
                unset($_SESSION['carrito'][$clave]);
            }else{
                if(isset($_POST["pisar"])){
                    $_SESSION['carrito'][$clave]['cantidad'] = $cantidad;
                }else{

                    $_SESSION['carrito'][$clave]['cantidad'] = $_SESSION['carrito'][$clave]['cantidad']+$cantidad;
                }
    
                if($_SESSION['carrito'][$clave]['cantidad']<1){
                    unset($_SESSION['carrito'][$clave]);
                   }
            }

            $actualizado=true;

        }
    }

    if ($actualizado==false){
        
        $elemento_carrito = array("id"=>$id,"cantidad"=>$cantidad);

        $_SESSION['carrito'][] = $elemento_carrito;
    }

}

echo "OK";
?>