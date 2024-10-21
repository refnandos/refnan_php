<!DOCTYPE html>
<html>
<head>
<title>destino.php</title>
</head>
<body>
  <?php
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  echo "Variable nombre: " . $_POST["nombre"] . "<br>";
  echo "Variable apellidos:  " . $_POST["apellidos"] . "<br>";
?>  
</body>
</html>