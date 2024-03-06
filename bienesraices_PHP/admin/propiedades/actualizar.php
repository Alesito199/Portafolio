<?php
require '../../include/funciones.php';
$auten = estadoAutenticado();
if(!$auten){
    header('location: /');
}
 $id = $_GET['mensaje'];
 $id= filter_var($id,FILTER_VALIDATE_INT);
if(!$id){
    header('location: ../index.php');
}

//BASE DE DATOS
require '../../include/config/database.php';
$db = ConectarDb();

//HACER LA CONSULTA CON LA VERIFICACION
$consulta = "SELECT * FROM propiedades where id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


//CONSULTA A LA BASE DE DATOS
$consulta = "SELECT * from vendedores";
$vendedores = mysqli_query($db, $consulta);

//ARREGLO CON MENSAJES DE ERRORES
$errores = [];


$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedor = $propiedad['vendedores_id'];
$imagenPropiedad= $propiedad['imagen'];
$creado = date('Y/m/d');


//EJECUTAR EL CODIGO DESPUES DE QUE EL USUSARIO ENVIA EL FORMULARIO
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedor = mysqli_real_escape_string($db, $_POST['vendedor']);

    //Asignar archivo havia una variable
    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = 'Debes Anhadir un titulo';
    }
    if (!$precio) {
        $errores[] = 'Debes Anhadir un Precio';
    }
    if (strlen($descripcion) < 10) {
        $errores[] = 'Debes Anhadir una Descripcion y debe de tener 50 caracteres';
    }
    if (!$habitaciones) {
        $errores[] = 'Debes Anhadir Cantidad de habitaciones';
    }
    if (!$wc) {
        $errores[] = 'Debes Anhadir cantidad de banhos';
    }
    if (!$estacionamiento) {
        $errores[] = 'Debes Anhadir cantidad de estacionamiento';
    }
    if (!$vendedor) {
        $errores[] = 'Debes selecionar un vendedor';
    }
    
    //VALIDAAR POR TAMANHO (100KB MAXIMO)
    $medida = 1000 * 100;
    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }

    //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
    if (empty($errores)) {
        
        //CREAR CARPETA
         $carpetaImagenes= '../../imagenes/';
         if(!is_dir($carpetaImagenes)){
             mkdir($carpetaImagenes);
         }
         $nombreImagen = '';
    /*SUBIDA DE ARCHIVOS*/
        
        if($imagen['name']){
            //ELIMINAR LA IMAGEN PREVIA PARA LA NUEVA IMAGEN
            unlink($carpetaImagenes . $propiedad['imagen']);
            
            //GENERAMOS UN NOMBRE PARA LA IMAGEN
             $nombreImagen = md5( uniqid( rand(), true ) ). ".jpg";

             //subir imagen 
             move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }
        
       
        

        //ACTUALIZAMOS LA BASE DE DATOS
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = ${precio},imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, creado = '${creado}',vendedores_id = ${vendedor} WHERE id = ${id}";
      
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            //redireccionar 
            header('location: ../index.php?mensaje=1'); //editar ruta para redireccionar
        }
    }
}



incluirTemplete('header');
?>
<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>
    <a href="../index.php" class="boton-verde">Volver</a>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form action="" method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            <img src="../../imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 2" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Banhos:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 2" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 2" min="1" max="9" value="<?php echo $estacionamiento; ?>">

        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">--Seleccione--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($vendedores)) : ?>
                    <option <?php echo $vendedor === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
            <input type="submit" value="Actualizar Propiedad" class="boton-verde">
        </fieldset>
    </form>
</main>
<?php
incluirTemplete('footer');
?>