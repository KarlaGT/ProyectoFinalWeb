<?php
$conexion = new mysqli("localhost:3306", "root", "", "kafe");

if ($conexion->connect_error)
{
    echo "Error Conexión";
}
else
{
  echo "Conexion OK";
}


// $Correo = $_POST['Correo'];
// $Contraseña = $_POST['Contraseña'];

// $sql = sprintf("SELECT * FROM usuario WHERE Correo='%s' AND Contraseña='%s'", mysqli_real_escape_string($conexion, $Correo ), mysqli_real_escape_string($conexion, $Contraseña));


// $resultado = $conexion->query($sql);

  // if($resultado){
  //   echo "Sí"   ;
    // Redirecciono al usuario a la página principal del sitio.
  // header("Location: index.html"); 

  // }else{
  //   echo "SQL Error: "  //. mysqli_error($conexion);
  //  echo 'El email o password es incorrecto, intente de nuevo';
   // header("Location: index.html"); 
  // }
?>