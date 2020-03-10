
<?php
/*
    //Datos de conexion
    $host="localhost";
    $user = "root";
    $password = "12345678";
    $db = "persona";

    //crear la conexion
    $con = new mysqli($host, $user, $password, $db);
*/
    //prueba de conexion
    $con = mysqli_connect('localhost','root','12345678','persona');
    if($con->connect_error)
    {
        echo "base de datos no disponible";
    }else{
        echo "conectados a la base de datos <br>";
    }


    $query = "SELECT * FROM persona";

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla De Base De Datos</title>
</head>
<body>
<br>

<table border="1" >
<tr>
    <td><CENTER>ID</CENTER></td>
    <td><CENTEr>NOMBRES</CENTEr></td>
    <td><CENTer>EMAIL</CENTer></td>
</tr>
<?php
//$sql="SELECT * from persona";
$resultado = mysqli_query($con,$query);

while($mostrar=mysqli_fetch_array($resultado)){
?>
<TR>
    <td><?php echo $mostrar['id'] ?></td>
    <td><?php echo $mostrar['nombres'] ?></td>
    <td><?php echo $mostrar['email'] ?></td>
</TR>
<?php
}
$con ->close();
?>
</table>


</body>
</html>
