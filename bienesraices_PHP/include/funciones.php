<?php 
require 'app.php';
function incluirTemplete($nombre, $inicio = false ){
    include TEMPLATES_URL . "/${nombre}.php";
}