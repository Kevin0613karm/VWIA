<?php
$servidor="localhost";
$usuario="root";
$clave="";
$B_datos="vwia";
$conexion= mysqli_connect($servidor, $usuario, $clave, $B_datos) or die("Conexión Fallida");

if (isset($_POST[b1])){
    $Id_requerimiento=$_POST['Id_requerimiento'];
    $Fecha=$_POST['Date'];
    
    $insertar="insert into facturacion values('$Id_factura, $Id_requerimiento, $Fecha')";
    $resultado= mysqli_query($conexion, $insertar) or die ("Error al insertar los datos");
    mysqli_close($conexion);
    echo "Factura registrada con éxito";
    
}

?>
