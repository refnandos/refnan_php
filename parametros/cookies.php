


<!DOCTYPE html>
<html>
    <head>
    <title>origen.html</title>
    <link type="text/css" rel="stylesheet" href="estiloBasico.css" />
    </head>
    
    <div class="container">
        <a href="origen.php">volver al origen</a>
    </div>
    <br>
    


    <div class="container">
        <?php
            session_start();

            
            //mostrar valor de una sesion
            echo "<br>";
            echo $_SESSION['count'];
            echo "<br>";

            //muestra el contenido de una posision de la session
            echo $_SESSION['arrayses'][0];
            echo "<br>";

            //muestra el contenido de la sesion por asosiasion
            echo $_SESSION['arrayasos']['sesion1'];
            echo "<br>";
        ?>
    </div>
    <br>

</body>
</html>
