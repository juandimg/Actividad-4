<?php

if(!($con = mysqli_connect('localhost','root','','registro')))
    {

     echo "Error seleccionando la base de datos.";

      exit();
   }
else

   {

     echo "Conexión con el servidor es correcta OK.<br>";

     $numerod=$_POST['numerod'];

     $nombre=$_POST['nombre'];
     
     $apellido=$_POST['apellido'];
     
     $direccion=$_POST['direccion'];
     
     $telefono=$_POST['telefono'];
     
     $correo=$_POST['correo'];
     
     $contraseña=$_POST['contraseña'];
     

$Sql="insert into usuario (numerod,nombre,apellido,direccion,telefono,correo,contraseña) values

('$numerod','$nombre', '$apellido', '$direccion', '$telefono', '$correo', '
$contraseña' )";

mysqli_query($con,$Sql);
echo "<script>alert('La información ha sido almacenada correctamente');</script>";

}

?>
