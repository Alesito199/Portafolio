
    <?php 
    require 'include/funciones.php';
    incluirTemplete('header', $inicio = true);
    ?>

    <main class="contenedor seccion">
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
    </main>
<section class="section contenedor">
    <h2>Casas y Departamentos en Ventas</h2>
   <?php 
   $limite = 3 ;
   include 'include/templete/anuncios.php';
   ?>
    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tu suenhos</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend. Vivamus non ultricies mi.</p>
    <a href="contacto.html" class="boton-amarillo">Contactanos</a>
</section>
<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog1.webp" type="image/wewbp">
                    <source src="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Entrada en el techo de tu casa</h4>
                    <p class="informacion-meta" >Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

                    <p>Consejos para contruir ahorrando dinero.</p>

                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog2.webp" type="image/wewbp">
                    <source src="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta" >Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend. </p>

                </a>
            </div>
        </article>

    </section>

    <section class="testimoniales">
        <h3>Testimonial</h3>
        <div class="testimonial">
            <blockquote>
                Praesent ante orci, facilisis eget aliquet eu, fringilla ut dui. Donec purus enim, volutpat a blandit nec, lacinia sit amet libero. Nulla non luctus felis, a aliquet sapien. Praesent vel finibus lorem, sed scelerisque sem.
            </blockquote>
            <p>- Alejandro Aquino</p>
        </div>
    </section>
</div>

<?php 
    incluirTemplete('footer');
    ?>