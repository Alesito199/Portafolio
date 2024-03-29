

<?php 
    require 'include/funciones.php';

   
    incluirTemplete('header');
    ?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image-webp">
            <source srcset="build/img/destacada3.jpg" type="image-jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre">

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email">

                <label for="telefono">Telefono</label>
                <input type="tel" id="telefono" placeholder="Numero de Telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" cols="30" rows="10"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Presupuesto</label>
                <input type="tel" id="presupuesto" placeholder="Tu precio o Presupuesto">
            </fieldset>
            <fieldset>
                <legend>Informacion de Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligio telefono, elija la hora y fecha para ser contactado.</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    <?php 
    incluirTemplete('footer');
    ?>