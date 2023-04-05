<?php include "header.php"; ?>

<section id="pago-carrito">
    <div>
        <h2>Completar Pago</h2>


        <div class="formularios-cliente">
            <div>
                <h3>Direccion de Envío</h3>
                <form enctype="multipart/form-data" id="shipping-address" class="address-form" method="post">

                    <div class="input-container required">
                        <label for="email">Email</label><input id="email" name="email" type="email" required>
                    </div>

                    <div class="input-container required">
                        <label for="nombre">Nombre</label><input id="nombre" name="nombre" type="text" required>
                    </div>

                    <div class="input-container required">
                        <label for="apellidos">Apellidos</label><input id="apellidos" name="apellidos" type="text"
                            required>
                    </div>

                    <div class="input-container">
                        <label for="compañia">Empresa</label><input id="compañia" name="compañia" type="text">
                    </div>

                    <div class="input-container required">
                        <label for="direccion1">Direccion</label>
                        <input id="direccion1" name="direccion1" type="text" required>
                    </div>

                    <div class="input-container required">
                        <label for="ciudad">Ciudad</label>
                        <input id="ciudad" name="ciudad" type="text" required>
                    </div>

                    <div class="input-container required">
                        <label for="provincia">Provincia</label>
                        <input id="provincia" name="provincia" type="text" required>
                    </div>

                    <div class="input-container required">
                        <label for="cp">Código Postal</label>
                        <input id="cp" name="cp" type="text" required>
                    </div>

                    <div class="input-container required">
                        <label for="telefono">Numero de Teléfono</label>
                        <input id="telefono" name="telefono" type="text" required>
                    </div>

                    <div>
                        <h3>Metodo de Pago </h3>
                        <div class="flex">
                            <div class="marg-l-10">
                                <label for="paypal">PayPal <i class="fa-brands fa-paypal"></i></label>
                                <input id="paypal" name="metodo" type="radio" required>
                            </div>
                            <div class="marg-l-10">
                                <label for="mastcard">Master Card <i class="fa-brands fa-cc-mastercard"></i></label>
                                <input id="mastcard" name="metodo" type="radio">
                            </div>
                        </div>
                    </div>

                    <button>
                        NEXT <span><i class="fa-solid fa-arrow-right"></i></span>
                    </button>


                </form>
            </div>
        </div>
        <div class="articulos-compra">



        </div>

    </div>


</section>

<?php include "footer.php"; ?>