<?php

include('basedatos.php');

if(isset($_POST["btneliminar"])){

    $operacionenbasededatos= new BaseDatos();

    $nombre=$_POST["eliminarre"];

    $eliminar="DELETE FROM usuarios WHERE nombre='$nombre'";

    $resultado=$operacionenbasededatos->alterarBaseDatos($eliminar);

    
}else{
    echo("No se hizo click en el botón");
}






?>