<?php
//IMPORTAR LA BASE DE DATOS 
require 'include/config/database.php';
$db = ConectarDb();
//CONSULTA SQL
$query = ("SELECT * FROM propiedades LIMIT ${limite}");


//OBTENER EL RESULTADO
$resultado = mysqli_query($db, $query);
?>



<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">
            <picture>
                <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'];?>" alt="Anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo'];?></h3>
                <p><?php echo $propiedad['descripcion'];?></p>
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
                <a class="boton boton-amarillo-block" href="anuncio.php?id=<?php echo $propiedad['id'];?>">
                    Ver Propiedad
                </a>
            </div><!---.CONTENIDO-ANUNCION-->
        </div><!----ANUNCIO-->

    <?php endwhile; ?>
</div><!---CONTENEDOR ANUNCIO-->

<?php 
//CERRAMOS LA CONEXION  
mysqli_close($db);
?>