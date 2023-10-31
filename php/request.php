<!DOCTYPE html>
<html lang='es'>
    
    <!----------------------------- HEAD ----------------------------------->
    <head>
        <meta charset="utf-8"/>
        <title>Biblioteca Pública</title>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <?php
            include "scripts.php";
        ?>
    </head>
    
    <!----------------------------- BODY ----------------------------------->
    <body>
    
        <div class="contenedor">
        <?php
            // DATOS CORRECTOS: si todo es correcto muestra esta información
            if(comprobarEmail($_POST["email"]) && comprobarTel($_POST["tel"]) && comprobarFecha($_POST["fecha"]) && comprobarDNI($_POST["dni"])) {
                echo "<h1>Alquiler correcto</h1>";
                echo "<p>Usuario: " . $_POST['nombre'] . " " . $_POST['apellidos'] . "</p>";
                echo "<p>Fecha de devolución: " . fechaDevolucion($_POST["fecha"]) . "</p>";
                echo "<p>DNI: " . strtoupper($_POST["dni"]) . "</p>";

            // DATOS INCORRECTOS: comprueba cuáles son los que están mal y lo indica
            } else {
                echo "<h1>Error</h1><br>";
                
                // Email inválido
                if(!comprobarEmail($_POST["email"])) {
                    echo "<p>El email está mal: comprueba el formato.</p><br>";
                }

                // Teléfono inválido 
                if(!comprobarTel($_POST["tel"])) {
                    echo "<p>El teléfono está mal: sólo teléfonos de España.</p><br>";
                }

                // Fecha inválida
                if(!comprobarFecha($_POST["fecha"])) {
                    echo "<p>La fecha está mal: elige una fecha posterior.</p><br>";
                }

                // DNI inválido
                if(!comprobarDNI($_POST["dni"])) {
                    if(!empty($_POST["dni"])) {
                        $num = sacarNumDNI($_POST["dni"]);
                        echo "<p>El DNI esta mal: la letra correcta es " . calcularLetraDNI($num) . ".</p>";
                    } else {
                        echo "<p>El DNI esta mal: introduce un DNI válido.</p>";
                    }
                }
            }
        ?>
        <div>

    </body>
</html>