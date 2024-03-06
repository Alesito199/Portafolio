<?php 
require 'app.php';
function incluirTemplete($nombre, $inicio = false ){
    include TEMPLATES_URL . "/${nombre}.php";
}

function estadoAutenticado() : bool {
    session_start();
    $auten = $_SESSION['login'];
    if($auten){
        return true ;
    }else{
    return false ;
    }
}
