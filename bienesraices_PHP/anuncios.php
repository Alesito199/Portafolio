
<?php 
    require 'include/funciones.php';

   
    incluirTemplete('header');
    ?>
    <main class="contenedor seccion">
        <section class="section contenedor">
            <h2>Casas y Departamentos en Ventas</h2>
            <?php 
            $limite = 10 ;
            include 'include/templete/anuncios.php';
   ?>
    </main>


    <?php 
    incluirTemplete('footer');
    ?>