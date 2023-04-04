<?php

    $res = $db->query("SELECT * FROM galeria_imagenes")
?>

<section id="galeria">
    <div>
        <ul class="listado-galeria">
        <?php
            while($row=$res->fetch_assoc()){
                echo "<li><a href='images/galeria-restaurante/".$row["nombre"]."' data-lightbox='image-".$row["id"]."' data-title='My caption'><img src='images/galeria-restaurante/".$row["nombre"]."' data='iamgen galeria' /></a></li>";
            }
        ?>
        </ul>
    </div>
    
</section>