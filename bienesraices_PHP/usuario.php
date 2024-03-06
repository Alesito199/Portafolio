<?php 
//IMPORTAR LA CONEXION
require 'include/config/database.php';
$db = ConectarDb();
//CREAR UN EMAIL Y PASS
$email = 'alexs199.ale@gmail.com';
$pass = '12345';
$encriptado = password_hash($pass, PASSWORD_DEFAULT);
//QUERY PARA CREAR EL USUARIO
$query = "INSERT INTO usuarios (email, pass) VALUES ('${email}','${encriptado}')";


//AGREGARLO A LA BASE DE DATOS
mysqli_query($db, $query);

?>