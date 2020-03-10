<?php
    //Datos de conexion
    $host="localhost";
    $user = "root";
    $password = "12345678";
    $db = "persona";

    //crear la conexion
    $con = new mysqli($host, $user, $password, $db);

    //prueba de conexion
    if($con->connect_error)
    {
        echo "base de datos no disponible";
    }else{
        echo "conectados a la base de datos <br>";
    }

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    echo "la informacion enviada: Nombre: $nombre Email $email";

    $query = "insert into persona (nombres,email) values ('$nombre','$email')";

    if($con->query($query))//devuelve un true o false
    {
        echo "persona guardada correctamente";
    } else{
        echo "no se a podido guardar la persona".$con->error;
    }


    $con ->close();

    header('location: crear.php');
?>