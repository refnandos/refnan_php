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

    <?php
    //enlace absoluto de la carpeta htdocs xampp
    $dir_subida = 'C:/xampp/htdocs/parametros/';


    //$_FILES ['name' del input que selecciona un archivo]['name' el nombre del archivo subido]
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

    echo '<pre>';

    //$_FILES['name' del input]['tmp_name' el nombre temporal del fichero en el q se almacena el fichero en el servidor]
    if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }

    echo 'Más información de depuración:';
    print_r($_FILES);

    print "</pre>";

?>

</body>
</html>