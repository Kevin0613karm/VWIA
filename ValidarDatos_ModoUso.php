<?php
$servidor="localhost";
$usuario="Kevin";
$clave="543816729kR";
$B_datos="vwia";
$conexion= mysqli_connect($servidor, $usuario, $clave, $B_datos) or die("Conexión Fallida");

if (isset($_POST[b1])){
    $Id_ModoUso=$_POST['Id_ModoUso'];
    $Nom_Modo_Uso=$_POST['Nom_Modo_Uso'];
    $insertar="insert into perfil values('$Id_ModoUso','$Nom_Modo_Uso')";
    $resultado= mysqli_query($conexion, $insertar) or die ("Error al insertar los datos");
    mysqli_close($conexion);
    echo "Usuario registrado con exito";
    
}

?>
