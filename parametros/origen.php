<!DOCTYPE html>
<html>
    <head>
    <title>origen.html</title>
    <link type="text/css" rel="stylesheet" href="estiloBasico.css" />
    </head>
    
    <div class="container">
        <a href="pasoParametros.php?saludo=hola&texto=Esto es una variable texto">Paso variables saludo y texto a la página destino.php</a>
    </div>
    <br>
    
    <div class="container">
    <?php
        $a = "Hola";
        $b = "Estoe es una variable de texto generada por php";
        echo "<a href='pasoParametros.php?saludo=$a&texto=$b'>Paso variables saludo y texto a la página destino.php</a>";
    ?>
    </div>

    <br>
    
    <div class="container">
    <form method="POST" action="pasoParametrosDos.php">
        Nombre<br>
        <input type="text" name="nombre"><br>
        Apellidos<br>
        <input type="text" name="apellidos"><br>
        <input type="submit">
    </form>
    </div>

</body>
</html>

