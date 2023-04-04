<footer>
    <section id="contacto">
        <div class="direccion">

            <h3>Dirección</h3>
            <address><i class="fa-solid fa-location-dot"></i> Calle Vista Alegre N40<br>Vilagarcia de Arousa
            </address>

            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d367.1629616069991!2d-8.7700126935516!3d42.59129974151174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f1415fd40417b%3A0x1733616593c063ad!2sR%C3%BAa%20Vista%20Alegre%2C%2036600%20Vilagarc%C3%ADa%20de%20Arousa%2C%20Pontevedra!5e0!3m2!1ses!2ses!4v1680620900183!5m2!1ses!2ses"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact">

            <div class="horario">
                <h3>Horario</h3>
                <p>Mañanas (Todos los días) 13.00 A 16.30</p>
                <p>Tardes (Todos los días) 20.00 A 23.00</p>
            </div>

            <h3>Envíanos un correo con tus dudas o sugerencias.</h3>
            <form onSubmit="enviarComentario()">
                <input name="email" type="email" placeholder="Email" />
                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                <button>Enviar Mensaje</button>
            </form>


        </div>
    </section>
</footer>

</main>
</body>
<script src="js/carusel.js"></script>
<script src="js/menu.js"></script>
<script src="js/carta.js"></script>
<script src="js/contacto.js"></script>
<script src="js/carrito.js"></script>
<script>
cargarCarrito()
</script>

</html>