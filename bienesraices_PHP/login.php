<?php 
//IMPORTAR LA BASE DE DATOS 
require 'include/config/database.php';
$db = ConectarDb();
$errores=[];
//AUTENTICAR EL USUARIO
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
    $pass = mysqli_real_escape_string($db, $_POST['password']);
    if(!$email){
        $errores[]= 'EMAIL OBLIGATORIO';
    }
    if(!$pass){
        $errores[]= 'PASSWORD OBLIGATORIO';
    }
    if(empty($errores)){
        //REVISAMOS SI EL USUARIO EXISTE
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        //LEEMOS EL RESULTADO 
        $resultado = mysqli_query($db, $query);

        if($resultado->num_rows){
                //GUARDAMOS DENTRO DE UNA VARIABLE EL RESULTADO
                $usuario = mysqli_fetch_assoc($resultado);
                //VERIFICAMOS SI LA CONTRA ES CORRECTA
                $auten = password_verify($pass, $usuario['pass']);
                if($auten){
                    //USUARIO AUTENTICADO
                    session_start();
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true; //editar ruta para redireccionar
                    header('location: admin/index.php');
                }else{
                    //CONTRASENHA INCORRECTA
                    $errores[]= 'CONTRASENHA INCORRECTA';
                }
        }else{
            $errores[] = "El usuario no existe";
        }
    }

}
//INCLUDE EL HEADER
    require 'include/funciones.php';
    incluirTemplete('header');
    ?>
<main class="contenedor seccion contenido-centrado">
<h1>Iniciar Sesion</h1>

<?php 
foreach($errores as $error):
?>
<div class="alerta error">
    <?php echo $error ; ?>
</div>
<?php endforeach;?>

<form method="POST" class="formulario">
<fieldset>
                <legend>Email y Password</legend>
               
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" require>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su Password" require>
            </fieldset>
            <input type="submit" class="boton-verde" value="Iniciar Sesion">
</form>
</main>
<?php 
incluirTemplete('footer');
?>