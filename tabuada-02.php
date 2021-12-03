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

    $v = isset($_GET["num"])?$_GET["num"]:1;
    $c = 10;
    

    do{
      $m = $c - 1;
      $r = $v * $m;
      echo"$v x $m = $r <br/>" ;
      
      $c--;
    }while($c >= 1);

    
        
    ?>
</div>
</body>
</html>
 