<?php

include('basedatos.php');

if(isset($_POST["btnbuscar"])){

    $operacionenbasededatos= new BaseDatos();

    $nombre=$_POST["consultasre"];

    $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

    $resultado=$operacionenbasededatos->consultarEnBaseDatos($consulta);

    echo("<br>");
    print_r(json_encode($resultado));

}else{
    echo("No se hizo clikc en el botón");
}






?>