<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        $d = 0;

        for($c = 1; $c <= 100; $c++){
          if ($n % $c == 0){
            $d++;
          }
          }
          if ($d == 2){
            echo"É Primo Só é Divisivel por 1 e ele mesmo!";
          }else {
            Echo"Não é Primo é Divisivel Por: $d Numéros </br>" ;
          }
        
        
    ?>
</div>
</body>
</html>
 