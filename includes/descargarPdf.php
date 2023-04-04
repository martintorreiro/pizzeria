<?php
require_once '../vendor/dompdf/autoload.inc.php';
    
  use Dompdf\Dompdf;

if(isset($_POST["carta"])){

   $html = $_POST["carta"];
   $dompdf = new Dompdf();
   $dompdf->loadHtml($html);
   $dompdf->setPaper('A4', 'landscape');
   $dompdf->render();
   $dompdf->stream("carta.pdf"); 
 
   /*  return $dompdf->output(); */

}




?>