<?php
require '../include/funciones.php';
$auten = estadoAutenticado();
if(!$auten){
    header('location: ../index.php');
}
var_dump($_SESSION);
//IMPORTAR LA CONEXION
    require '../include/config/database.php';
    $db = ConectarDb();
//ESCRIBIR EL QUERY OSEA LA CONSULTA
    $query = "SELECT * FROM propiedades";
//CONSULTAR LA BD
    $resultadoConsulta = mysqli_query($db,$query);

//MENSAJE CONDICIONAL QUE NOS DICE SI SE HA AGREGADO UN DATO A LA BASE DE DATOS
$mensaje = $_GET['mensaje'] ?? null; // en caso de no estar es null antes se utilizaba isset



incluirTemplete('header');
?>
<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <?php if ($mensaje == 1) : ?>
        <p class="alerta exito">Anuncio Creado Correctamente.</p>
        <?php elseif($mensaje == 2 ):?>
        <p class="alerta exito">Anuncio Actualizado Correctamente.</p>
        <?php elseif($mensaje == 3 ):?>
        <p class="alerta exito">Anuncio Borrado Correctamente.</p>
        <?php elseif($mensaje == 4 ):?>
        <p class="alerta exito">Bienvenido</p>
    <?php endif; ?>
    <a href="propiedades/crear.php" class="boton-verde"> Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody><!----MOSTRAR EL RESULTADO DE LA BASE DE DATOS---->
        <?php 
        while($propiedad = mysqli_fetch_assoc($resultadoConsulta)):?>
            <tr>
                <td><?php echo $propiedad['id'];?></td>
                <td><?php echo $propiedad['titulo'];?></td>
                <td><img src="../imagenes/<?php echo $propiedad['imagen'];?>" alt="Imagen" class="imagen-tabla"></td>
                <td>$<?php echo $propiedad['precio'];?></td>
                <td>
                    <form action="propiedades/borrar.php" method="post" class="w-100">
                    <input type="hidden" name="id" value="<?php echo $propiedad['id'] ; ?>">
                    <input type="submit"  class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="propiedades/actualizar.php?mensaje=<?php echo $propiedad['id'];?>" class="boton-amarillo-block" >Actualizar</a>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</main>
<?php
    //CERRAR LA CONEXION
            mysqli_close($db);

incluirTemplete('footer');
?>