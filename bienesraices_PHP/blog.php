

<?php 
    require 'include/funciones.php';

   
    incluirTemplete('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog1.webp" type="image/wewbp">
                    <source src="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Entrada en el techo de tu casa</h4>
                    <p>Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

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
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend. </p>

                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog3.webp" type="image/wewbp">
                    <source src="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Entrada en el techo de tu casa</h4>
                    <p>Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

                    <p>Consejos para contruir ahorrando dinero.</p>

                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog4.webp" type="image/wewbp">
                    <source src="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el <span>2/2/2024</span> por <span>Admin</span>. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum magna non laoreet eleifend. </p>

                </a>
            </div>
        </article>

    </main>

    <?php 
    incluirTemplete('footer');
    ?>