<?php 
$id = $_POST['id'];
//BASE DE DATOS
require '../../include/config/database.php';
$db = ConectarDb();
//ELIMINAR LA IMAGEN DEL ARCHIVO
$query = "SELECT imagen FROM propiedades WHERE id = '${id}'";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);
unlink('../../imagenes/' . $propiedad['imagen']);
//HACER LA CONSULTA CON LA VERIFICACION
$consulta = "DELETE FROM propiedades WHERE id = '${id}'";
$resultado = mysqli_query($db, $consulta);
if($resultado){
    header('location: ../index.php?mensaje=3'); //editar ruta para redireccionar
}


?>
