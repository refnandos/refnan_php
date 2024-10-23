<?php
//crear cookie  
    setcookie("usuario","usuario777@gmail.com",time() + 84600,"/");

//comprobar soporte de cookies del navegador
    if(count($_COOKIE)> 0){
        echo "cookies aceptada";
    }else{
        echo "cookes no soportadas";
    }


//mostrar valor de la cookie
    echo ($_COOKIE ["usuario"]);

    echo("<br>");

//borrar una cookie
    //setcookie("usuario","usuario777@gmail.com",time() - 84600,"/")
    


    //estricatamente nescesario para iniciar una sesion
    session_start();

    //comprubua la disponibilidad de una sesion y la establece en 1
    if (!isset($_SESSION['count'])) {
      $_SESSION['count'] = 0;
      //echo "csesion soportadas";
    } else if ($_SESSION['count']){
      $_SESSION['count']++;
      //echo "sesion no soportadas";
    }

    // se puede establecer una sesion directamente y establecerla como un array
    $_SESSION['arrayses'] = array();
        
    $_SESSION['arrayses'][0] = "pato";

    //tambien puede ser por orden asosiativo
    $_SESSION['arrayasos'] = array();

    $_SESSION['arrayasos']['sesion1'] = "contenido sesion asosiativa";

    /*
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
    */




    //session_destroy('count');
    
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Paso de parametros y Mantenimiento de estado</title>
    <link type="text/css" rel="stylesheet" href="estiloBasico.css" />
    </head>

    <br>

    <h1>Paso de parametros por url</h1>
    <h2>parametros pasados por url normal</h2>
    <div class="container" >
        <a href="pasoUrl.php?saludo=hola&texto=Esto es una variable texto">Paso variables saludo y texto a la página destino.php</a>
    </div>
    <br>


    <h2>Paso de parametros por url generada por php con problema de envio</h2>
    <!--usa urlencode() para pasar variables con caracteres complejos o espacios vacios-->
    <div class="container">
        <?php
            $a = "Hola nuevo usuario";
            $b = "Esto es una variable de texto generada por php";
            echo "<a href=pasoUrl.php?saludo=".urlencode($a)."&texto=".$b.">Paso variables saludo y texto a la página destino.php</a>";
        ?>
    </div>
    <br>

    <h2>Paso de parametros por url generada por php otro tipo de solucion</h2>
    <div class="container">
        <?php
            $a = "Hola nuevo usuario";
            $b = "Esto es una variable de texto generada por php";
            echo "<a href='pasoUrl.php?saludo=$a&texto=$b'>Paso variables saludo y texto a la página destino.php</a>";
        ?>
    </div>
    <br>

    


    <h1>Paso de parametros por Formularios</h1>
    <h2>Formulario base</h2>
    <div class="container">
        <form method="POST" action="formularioSimple.php">
            <a>Nombre</a><br>
            <input type="text" name="nombre" required><br>
            <a>Apellidos</a><br>
            <input type="text" name="apellidos" required><br>
            <input type="submit">
        </form>
    </div>
    <br>
    
    
    <h2>Formulario de registro</h2>
    <div class="container">
        <form method="post" action="register.php" name="formulario-registo">
            <div class="formulario">
                <label>Nombre usuario</label><br>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="formulario">
                <label>Email</label><br>
                <input type="email" name="email" required />
            </div>
            <div class="formulario">
                <label>Contraseña</label><br>
                <input type="password" name="password" required />
            </div>
            <button type="submit" name="register" value="register">Registrarse</button>
        </form>
    </div>

    <h2>Subida de fichero</h2>
    <div class="container">
        <form enctype="multipart/form-data" action="subidaFichero.php" method="POST">
        <!--Input oculto para limitar el tamaño del fichero-->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!--Input encargado de seleccionar un archivo-->
        Enviar este fichero: <input name="fichero_usuario" type="file" />
        
        <input type="submit" value="Enviar fichero" />
        </form>
    </div>
    <br>

    <div class="container">
        <a href="cookies.php">cookies y mantenimiento de sesion</a>
    </div>
    <br>


</body>
</html>


