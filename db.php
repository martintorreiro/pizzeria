<?php  

    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "pizzeria-examen";


    $db = new mysqli($host, $user, $password, $db_name);
    


?>