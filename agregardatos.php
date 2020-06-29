<?php

    include('basedatos.php');

//Validar que se hizo click en el botón de enviar datos
if(isset($_POST["btnagregar"])){

    //Recibir los datos enviados
    $nombre=$_POST["nombreusuario"];
    $correo=$_POST["correousuario"];
    $contrasena=$_POST["contrasenausuario"];

    //Crear un objeto del tipo Basedatos (crear variable)
    $operacionenbasededatos= new BaseDatos();
    

    //Crear una cosulta para agregar datos
    $consulta="INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre', '$correo', '$contrasena')";
    
    //Utilizar el método alterarBaseDatos para ejecutar la consulta
    $resultado=$operacionenbasededatos->alterarBaseDatos($consulta);

    //verificar que sí se escribieron los datos
    if($resultado){
        echo("<br>");
        echo("Se han agregado con éxito datos a la base de datos");
        echo("<br>");
    }else{
        echo("<br>");
        die("Error en la transacción");
    }


}else{
    echo("No ha presionado el botón, usted no debería de estar aquí");
}



?>

