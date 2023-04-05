<?php

require_once 'vendor/dompdf/autoload.inc.php';
    
use Dompdf\Dompdf;

function generarPdf($pdf){
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($pdf);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream(); 

/*  return $dompdf->output(); */
}

$resCat = $db -> query("SELECT c.*  from platos p LEFT JOIN categorias c
ON p.id_categoria = c.id GROUP BY c.id");

?>

<section id="carta" class="carta">

<div>
    <h2>Nuestro Menú</h2>
    <div class="lista-categorias">
        <?php
            while($row = $resCat->fetch_assoc()){
                $res = $db -> query("SELECT * from platos WHERE id_categoria = '".$row["id"]."'");
                $cadena = "<div class='categoria'><h3>".$row["nombre"]."</h3><ul>";
                while($rowPlato = $res->fetch_assoc()){
                    $cadena .= "<li><span>".$rowPlato["nombre"]."</span><span>".$rowPlato["precio"]." €  <button onClick='añadirCarrito(".$rowPlato["id"].")' ><i class='fa-solid fa-circle-plus'></i></button></span></li>";
                }
                $cadena .= "</ul></div>";
                echo $cadena;
            }
        ?>
 
    </div>

    <div>
        <button class="letra-normal" onClick="descargarPdf()">Descargar Carta</button>
    </div>

</div>

</section>