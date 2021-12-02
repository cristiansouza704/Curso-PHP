<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="exe02-part2.php" method="get">
        <?php
           $c = 1;
        while($c <= 5){
           echo "<input type='number' name='v$c' value='v$c' max='100'  min='0'> <br/>";
           $c++;
        }   

         
        ?>
        <input type="submit" value="enviar">
    </form>
</div>
</body>
</html>
 