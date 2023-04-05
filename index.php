<?php
    include "header.php";
    include "db.php";
?>

<!-- 
    DBOVEDA1@GMAIL.COM 
    PRACTICAS: DIEGO-> 687736300
               DIEGO WAS-> 630778330
    curriculum: canva europass
-->
<section class="slider" id="home">
    <div class="owl-carousel car1 owl-theme">
        <div class="item car-img1"
            style="background-image:url('images/slider-principal/platos.jpg'); background-position:center; background-size:cover">
            <h4 class="car-title">Food & live style</h4>
        </div>
        <div class="item car-img2" style="background-image:url('images/slider-principal/pizza.jpg')">
            <h4 class="car-title">Simply cooked</h4>
        </div>
        <div class="item car-img3" style="background-image:url('images/slider-principal/postre.jpg')">
            <h4 class="car-title">Imabination Box</h4>
        </div>
    </div>
</section>

<?php
require "conocenos.php"
?>

<?php
require "carta.php"
?>

<?php
require "galeria.php"
?>

<?php
    include "footer.php";
?>