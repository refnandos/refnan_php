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
    
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "registrosJulia";
    $conexion = mysqli_connect ($servidor,$usuario,$clave,$dbname);
    
    if ($conexion)
    echo "<h2>CONEXION REALIZADA CORRECTAMENTE</h2>";
    else{
    echo"<h2>ERROR: no tienes permiso de conexión</h2>";
    exit();
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password_hash = password_hash($password, PASSWORD_BCRYPT);

    echo "Nombre de usuario: " . $username . "<br>";
    echo "email:  " . $email . "<br>";
    echo "contraseña: " . $password . "<br>";
    //echo "contraseña encriptada:  " . $password_hash . "<br>";

    echo "todo bien1";
    
    $sql = "INSERT INTO `Students` (`name`, `password`, `email`))  VALUES ('Test', 'Testing', 'Testing@tesing.com')";
    
    //$sql = "SELECT * FROM `Students`;";

    echo "todo bien2";

    

    echo "todo bien3";
    
    
    
    $conexion = mysqli_close($conexion);
    ?>
    </div>
</body>
</html>


