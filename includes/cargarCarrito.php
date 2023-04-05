<?php
include "../db.php";


    $cadena = "<ul class='lista-carrito'>";
    $subtotal=0;
    if(!isset($_SESSION["carrito"])||count($_SESSION["carrito"])<1){
        echo "<p>Aun no tienes productos en el carrito!</p>";
    }else{

        foreach($_SESSION['carrito'] as $clave=>$valor){

            $id =  $_SESSION['carrito'][$clave]['id'];
            $cantidad = $_SESSION['carrito'][$clave]['cantidad'];
            $res = $db->query("SELECT * FROM platos WHERE id = $id");

            if($row = $res->fetch_assoc()){
    
                $subtotal += $row["precio"]*$cantidad;
                
                $cadena .= "<li >
                
                                <div class='img'>
                                    <img src='images/platos/".$row["foto"]."' alt='foto producto'>
                                </div >

                                <div  class='info-plato'>
                                    <div>
                                        <p class='nombre'>".$row["nombre"]."</p>
                                        <span class='precio'>".$row["precio"]*$cantidad."$</span>
                                    </div>
                                    <div class='controles-carrito'> 
                                        <button onClick='añadirCarrito($id,-1)'><i class='fa-solid fa-circle-minus'></i></button>
                                        <input  onChange='añadirCarrito($id,\"set\")' type='text' value='".$cantidad."'>
                                        <button onClick='añadirCarrito($id,1)'><i class='fa-solid fa-circle-plus'></i></button>
                                    
                                        <button class='delete' onClick='añadirCarrito($id,\"delete\")'>
                                            <i class='fa-regular fa-trash-can'></i>
                                        </button>
                                    </div>
                                </div>
                                
                            </li>";
            }
        }
    
        $cadena .= "</ul>
                    <div class='acciones-carrito'>
                        <div class='total-carrito'>
                            <span >TOTAL CARRITO:</span>
                            <span >".$subtotal."$</span>
                        </div>
                        <div >
                            <a href='pago-carrito.php'>Completar Pedido</a>
                        </div>
                    </div>";
        echo $cadena;

    }

   

?>