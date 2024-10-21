<!DOCTYPE html>
<html>
<head>
<title>destino.php</title>
<link type="text/css" rel="stylesheet" href="estiloBasico.css" />
    
</head>
<body>
<div class="container">
  <?php
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  echo "Variable nombre: " . $_POST["nombre"] . "<br>";
  echo "Variable apellidos:  " . $_POST["apellidos"] . "<br>";
?>  
</div>
</body>
</html>