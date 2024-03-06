<?php 
    require 'include/funciones.php';
    incluirTemplete('header');
    //RECIBIMOS EL ID DEL ANUNCIO 
    $id = $_GET['id'];
        //IMPORTAR LA BASE DE DATOS 
        require 'include/config/database.php';
        $db = ConectarDb();
        //CONSULTA A LA BASE DE DATOS
        $query = "SELECT * FROM propiedades WHERE id = '${id}'";
        $resultado = mysqli_query($db, $query);

        $propiedad = mysqli_fetch_assoc($resultado);
    ?>

<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad['titulo'];?></h1>
    <picture>
        <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'];?>" alt="Imagen de la Propiedad">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad['precio'];?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc'];?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p><?php echo $propiedad['estacionamiento'];?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p><?php echo $propiedad['habitaciones'];?></p>
            </li>
        </ul>
        <p><?php echo $propiedad['descripcion'];?></p>
    </div>

</main>

<?php 
    incluirTemplete('footer');
    ?>