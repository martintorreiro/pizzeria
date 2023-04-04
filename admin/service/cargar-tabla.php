<?php

include "../db.php";

if(isset($_GET["tabla"])){

    $tabla = $_GET["tabla"];

    if($tabla == "categorias"){
        
        $res = $db->query("SELECT * FROM categorias");

        $cadena = "";
        
        while($row = $res->fetch_assoc()){
            $cadena .= " <tr>
                            <th>".$row["nombre"]."</th>
                            <th><button onClick='cargarForm(`categorias.php?id=".$row["id"]."&editar=true`)'><i class='fa-solid fa-pen-to-square'></i></button></th>
                            <th><button onClick='borrarFila(".$row["id"].",`categorias`)'><i class='fa-solid fa-trash'></i></button></th>
                        </tr>";
        }
    
            echo $cadena;
    }else if($tabla == "platos"){
        
        $res = $db->query("SELECT p.*, c.nombre AS categoria FROM platos p LEFT JOIN categorias c ON c.id = p.id_categoria");

        $cadena = "";
        
        while($row = $res->fetch_assoc()){
    
            $cadena .= " <tr>
                            <th>".$row["nombre"]."</th>
                            <th>".$row["precio"]."</th>
                            <th><img src='../images/platos/".$row["foto"]."' alt='imagen plato'></th>
                            <th>".$row["categoria"]."</th>
                            <th><button onClick='cargarForm(`platos.php?id=".$row["id"]."&editar=true`)'><i class='fa-solid fa-pen-to-square'></i></button></th>
                            <th><button onClick='borrarFila(".$row["id"].",`platos`)'><i class='fa-solid fa-trash'></i></button></th>
                        </tr>";
            
        }
    
            echo $cadena;
    }else if($tabla == "galeria"){
        
        $res = $db->query("SELECT * FROM galeria_imagenes");
        $cadena = "<ul>";
        
        while($row = $res->fetch_assoc()){
            $cadena .=  "<li><img src='../images/galeria-restaurante/".$row["nombre"]."' alt='imagen restaurante'></li>"; 
        }

        $cadena .= "</ul>";
        echo $cadena;
        
    }
  
}


?>