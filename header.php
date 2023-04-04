<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/conocenos.css">
    <link rel="stylesheet" href="css/carta.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Pizza Demo</title>
</head>

<body>

    <header>
        <div>
            <div class="logo">
                <img src="images/logo_pizzeria.png" alt="pizza logo" />
            </div>
            <h1></h1>
            <nav>

                <div id="bars-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>


                <ul class="main-nav">
                    <li><a href="#" id="nav-home" class="nav-home red-nav">Inicio</a></li>
                    <li><a href="#conocenos" id="nav-about" class="nav-about">Conócenos</a></li>
                    <li><a href="#carta" id="nav-menu" class="nav-menu">Menú</a></li>
                    <li>
                        <a href="#galeria" id="nav-gallery" class="nav-gallery">Galería</a>
                    </li>
                    <li>
                        <a href="#contacto" id="nav-contact" class="nav-contact">Contacto</a>
                    </li>

                    <li id="carrito">
                        <i
                            class="open-icon fa-solid fa-cart-shopping absolute top-0 right-0 left-0 bot-0 flex jc-center ai-center"></i>
                        <span
                            id="cantidad-carrito"><?php echo isset($_SESSION['carrito'])?sizeof($_SESSION['carrito']):"" ?></span>
                        <div id="contenido-carrito"></div>
                    </li>

                </ul>


            </nav>
        </div>
    </header>

    <main>