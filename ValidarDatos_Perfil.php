<?php
$servidor="localhost";
$usuario="root";
$clave="";
$B_datos="vwia";
$conexion= mysqli_connect($servidor, $usuario, $clave, $B_datos) or die("Conexión Fallida");

if (isset($_POST[b1])){
    $Id_cliente=$_POST['Identificación'];
    $Nombres_Apellidos=$_POST['NombresApellidos'];
    $Edad=$_POST['Edad'];
    $Email=$_POST['Email'];
    $Telefono=$_POST['Telefono'];
    $Genero=$_POST['Género'];
    $insertar="insert into perfil values('$Edad','$Email','$Telefono','$Genero','$Nombres_Apellidos','$Id_cliente')";
    $resultado= mysqli_query($conexion, $insertar) or die ("Error al insertar los datos");
    mysqli_close($conexion);
    if ($Genero=Masculino) {
    echo "Usuario registrado con exito";
    }
    else {
    echo "Usuaria registrada con exito";
    }
}

?>
