<?php

    $res = $db->query("SELECT * FROM galeria_imagenes")
?>

<section id="galeria">
    <div>

        <div class="owl-carousel car2 owl-theme">
            <?php
            while($row=$res->fetch_assoc()){
               echo  "<div class='item car-img".$row["id"]."'  >
                        <div style='background-image:url(\"images/galeria-restaurante/".$row["nombre"]."\"); background-position:center; background-size:cover;'>
                        <a href='images/galeria-restaurante/".$row["nombre"]."' data-lightbox='image-".$row["id"]."' data-title='My caption'></a>
                        </div>

                    </div>";
                    
            }
        ?>
        </div>

    </div>
</section>