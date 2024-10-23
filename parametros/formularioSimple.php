<!DOCTYPE html>
<html>
<head>
<title>destino.php</title>
<link type="text/css" rel="stylesheet" href="estiloBasico.css" />
    
</head>
<body>
  <div class="container">
        <a href="origen.php">volver al origen</a>
  </div>
  <br>

  <div class="container">
  <?php
    //paso de valores a las variables
    $nombre = null;
    $apellidos = $_POST["apellidos"];

    //comprobacion de recibir un valor en nombre
    if(isset($_POST["nombre"])){
      $nombre = $_POST["nombre"];
    } else {
      $nombre = "nombre no otorgado";
    }

    //impresion de los valores pasados por el formulario
    echo "Variable nombre: " . $nombre . "";
    echo "Variable apellidos:  " . $apellidos . " ";
  ?>  
  </div>
</body>
</html>