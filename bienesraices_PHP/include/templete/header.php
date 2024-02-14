<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../../build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '';//PREGUNTA SI SE ESTA CUMPLIENDO LA FUNCION SI ES VERDADEDOR O FALSA ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesraices_inicio/index.php">
                    <img src="../../build/img/logo.svg" alt="Logo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="../../build/img/barras.svg" alt="Icono menu resposive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="../../build/img/dark-mode.svg">
                    <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
                </div>
                
            </div><!---CIERRE DE LA BARRA--->
            <?php if($inicio){?>
                <h1>Venta de Casa y Departamentos</h1>
            <?php } ?>
        </div>
    </header>


