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


    Variable "saludo": 
    <?php 
      echo $_GET["saludo"]; 
    ?> 
    <br>
    Variable "texto" 
    <?php 
      echo $_GET["texto"];  
    ?>


  </div>
</body>
</html>