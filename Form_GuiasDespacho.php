<!DOCTYPE html>

<html>
    <head>
        <title>Formulario Facturación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Images/VWIA_lg.png" rel="icon" type="img/png"/>
        <link href="EstiloRegistrarse.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="nav"> <button type="button" class="Boton_atrás" onclick="window.open('index.html')">Atrás</button> </div>
        
        <form action="ValidarDatos.php" method="post" class="form_perfil">
            <h2 class="titulo_form_clientes">Facturación</h2>
            <div class="contenedor-input">
                <table class="tabla-perfil" border="1"><table-border="1">
                        
                        <tr>
                            <td class="celda-Género">Fecha</td>
                                    <td>
                                        <input type="text" class="date form-control" style="width: 300px" />
                                        <script 
                                            type="text/javascript"> $(".date").datepicker({format: "dd-mm-yyyy",});
                                        </script>
                                    </td>
                        </tr>
                </table>
                    
                <table class="Tabla-Botones">
                        <tr>
                            <td><input type="submit" value="Aceptar" class="btn-registrarse"> </td>
                            <div class="nav"> <button type="button" class="Boton_atrás" onclick="window.open('index.html')">Cancelar</button> </div>
                        </tr>
                        
                        
                </table>

            </div>
        </form>
    
    </body>
</html>