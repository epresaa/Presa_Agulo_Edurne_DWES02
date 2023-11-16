<!DOCTYPE html>

<html lang='es'>
    
    <!----------------------------- HEAD ----------------------------------->
    <head>
        <meta charset="utf-8"/>
        <title>Biblioteca Pública</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    
    <!----------------------------- BODY ----------------------------------->
    <body>
        
    <!-- Formulario -->
        <form action="php/request.php" method="post">
            <h1>Formulario de alquiler: </h1><br><label>Nombre</label><br>
            
            <!-- Nombre -->
            <input type="textarea" name="nombre" id="nombre" required>
            <br><br><br>

            <!-- Apellidos -->
            <label>Apellidos</label><br>
            <input type="textarea" name="apellidos" id="apellidos" required>
            <br><br><br>

            <!-- Título del libro -->
            <label>Libro</label><br>
            <input type="textarea" name="libro" id="libro" required>
            <br><br><br>

            <!-- Email -->
            <label>Email</label><br>
            <input type="textarea" name="email" id="email" required>
            <br><br><br>

            <!-- Teléfono -->
            <label>Teléfono</label><br>
            <input type="textarea" name="tel" id="tel" required>
            <br><br><br>       
            
            <!-- Fecha -->
            <label>Fecha de Alquiler</label><br>
            <input type="date" name="fecha" id="fecha" required>
            <br><br><br>

            <!-- DNI -->
            <label>DNI</label><br>
            <input type="textarea" name="dni" id="dni" required>
            <br><br>
            
            <input type="submit" value="Enviar" id="boton"/>
        </form>

    </body>

</html>