<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/estatico.css">
    <title>Atributo Estático - Poo Php</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/propriedade_estatica.php';

        new Software("Dia");
        new Software("Gimp");
        new Software("Gnumeric");
        echo "Quantidade criada = ". Software::$contador;

       ?>
    </div>
  </body>
</html>
