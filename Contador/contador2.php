<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
         $i = isset($_GET["inicio"])?$_GET["inicio"]:0;
         $f = isset($_GET["final"])?$_GET["final"]:0;
         $inc = isset($_GET["incremento"])?$_GET["incremento"]:0;

         while($i <= $f){
            echo"Numero: $i <br/>";
            $i = $i + $inc;
         }
         while($f <= $i){
            echo"Numero: $i <br/>";
            $i = $i - $inc;
         }
    ?>
</div>
</body>
</html>
 