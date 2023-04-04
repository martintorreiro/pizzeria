<?php

include "../db.php";

if($_POST){

    if($_POST["tabla"]=="categorias"){

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

    }else if($_POST["tabla"]=="platos"){
        
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $categoria = $_POST["categoria"];
        
    
        if(isset($_POST["id"])){
            $id=$_POST["id"];

            if($_FILES["imagen"]["name"]==""){
                $consulta = "UPDATE platos SET nombre = '$nombre', precio = '$precio', id_categoria = $categoria  WHERE id = $id";
                $res = $db->query($consulta);
                if($res){
                    echo "ok";
                }else{
                    echo "error";
                }
            }else{
                $res = $db->query("SELECT * FROM platos WHERE id = $id");
                $row=$res->fetch_assoc();
                $fotoDelete = $row["foto"];
                
               $imagen = $_FILES["imagen"];
               $foto = $imagen['name'];
               $tmpFilePath = $imagen['tmp_name'];
               $newFilePath = "../../public/images/platos/" . $imagen['name'];

               if(move_uploaded_file($tmpFilePath, $newFilePath)){
                    unlink("../../public/images/platos/$fotoDelete"); 
                    $consulta = "UPDATE platos SET nombre = '$nombre', precio = '$precio', foto = '$foto', id_categoria = $categoria  WHERE id = $id";
                    $res = $db->query($consulta);
                    
                    if($res){
                        echo "ok";
                    }else{
                        echo "error";
                    }
                }
            }
            
           
        }else{
            $imagen = $_FILES["imagen"];
            $foto = $imagen['name'];
            $tmpFilePath = $imagen['tmp_name'];
    
            if ($tmpFilePath != ""){
    
                $newFilePath = "../../images/platos/" . $imagen['name'];
    
                if(move_uploaded_file($tmpFilePath, $newFilePath)){

                    $consulta ="INSERT INTO platos (nombre, precio, foto, id_categoria) 
                    VALUES('$nombre', '$precio', '$foto', '$categoria')";

                    $res = $db->query($consulta);

                    if($res){
                            echo "ok";
                    }else {
                            echo "error";
                    }
                }
            }else{
                echo "error";
            }
            
        }
   
    }else if($_POST["tabla"]=="galeria"){

        $imagenes = $_FILES["imagenes"];
        $total = count($imagenes['name']);

        for( $i=0 ; $i < $total ; $i++ ){

            $imagen = $imagenes['name'][$i];
            $tmpFilePath = $imagenes['tmp_name'][$i];

            if ($tmpFilePath != ""){

                $newFilePath = "../../images/galeria-restaurante/" . $imagenes['name'][$i];

                if(move_uploaded_file($tmpFilePath, $newFilePath)){

                    $res = $db->query("INSERT INTO galeria_imagenes (nombre) VALUES('$imagen')");

                    if(!$res){
                        unlink($newFilePath);
                        echo "error";
                    }else{
                        echo "ok";
                    } 

                }
            }
        }

    }
}

?>