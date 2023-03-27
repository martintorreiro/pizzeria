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
    }
  
}


?>