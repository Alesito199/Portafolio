
<?php 
    require 'include/funciones.php';

   
    incluirTemplete('header');
    ?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Anho de Experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus ante id augue cursus, nec
                    rhoncus turpis condimentum. Quisque ante augue, accumsan sed aliquam sed, viverra ut sem. Morbi
                    dolor odio, imperdiet quis dui a, iaculis semper turpis. Quisque ac augue euismod, viverra ante id,
                    gravida orci. Proin scelerisque felis et tristique lacinia. Donec luctus vehicula ante, fringilla
                    dictum dolor ullamcorper ac. Fusce id arcu sed sem bibendum ullamcorper.
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus ante id augue cursus, nec
                    rhoncus turpis condimentum. Quisque ante augue, accumsan sed aliquam sed, viverra ut sem. Morbi
                    dolor odio, imperdiet quis dui a, iaculis semper turpis. Quisque ac augue euismod, viverra ante id,
                    gravida orci. Proin scelerisque felis et tristique lacinia. Donec luctus vehicula ante, fringilla
                    dictum dolor ullamcorper ac. Fusce id arcu sed sem bibendum ullamcorper.

                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend.
                    Vivamus
                    non ultricies mi. Vivamus eu urna a ipsum pellentesque accumsan vitae eget urna. .</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend.
                    Vivamus
                    non ultricies mi. Vivamus eu urna a ipsum pellentesque accumsan vitae eget urna..</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend.
                    Vivamus
                    non ultricies mi. Vivamus eu urna a ipsum pellentesque accumsan vitae eget urna.</p>
            </div>

        </div>
    </section>

    <?php 
    incluirTemplete('footer');
    ?>