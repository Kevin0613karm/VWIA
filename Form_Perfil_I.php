<!DOCTYPE html>

<html>
    <head>
        <title>Formulario Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Images/VWIA_lg.png" rel="icon" type="img/png"/>
        <link href="EstiloRegistrarse.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <form action="ValidarDatos_Perfil.php" method="post" class="form_perfil">
            
            
            
            <h2 class="titulo_form_clientes">Perfil</h2>
            <div class="contenedor-input">
                <table class="tabla-perfil" border="1"><table-border="1">
                        <tr>
                            <td class="celda-identificacionUsuario">Identificación Usuario</td>
                            <td><input type="text" name="Identificación" class="input-50" placeholder="N°. Identificación"></td>
                        </tr>
                        
                        <tr>
                            <td class="celda-NombresApellidos">Nombres_Apellidos</td>
                            <td><input type="text" name="NombresApellidos" class="input-50" placeholder="Nombres y Apellidos"></td>
                        </tr>
                        
                        <tr>
                            <td class="celda-Edad">Edad</td>
                            <td><input type="text" name="Edad" class="input-50" placeholder="Edad"></td>
                        </tr>
                        
                        <tr>
                            <td class="celda-E-mail">E-mail</td>
                            <td><input type="text" name="Email" class="input-50" placeholder="Correo Electrónico"></td>
                        </tr>
                        
                        <tr>
                            <td class="Teléfono">Teléfono</td>
                            <td><input type="text" name="Telefono" class="input-50" placeholder="N°. Teléfono"></td>
                        </tr>
                        
                        <tr>
                            <td class="celda-Género">Género</td>
                                    <td><select name="Género" id="Género" class="select-45">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </td>
                        </tr>
                </table>
                    
                <table class="Tabla-Botones">
                        <tr>
                            <td><a class="Boton_atrás" href="index.html" target="_parent"> <center><img src="Images/BackButton.png" alt=""/></center></a></td>
                            <td> <input type="submit" value="Registrarse" class="btn-registrarse" name="b1"> </td>
                        </tr>
                        
                        
                </table>

            </div>
        </form>
    
    </body>
</html>
