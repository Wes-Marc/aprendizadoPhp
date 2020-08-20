<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/composicao.css">
    <title>Testes do livro</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/Fabricante.php';
        require_once 'class/Produto.php';
        require_once 'class/Caracteristica.php';

        $p1 = new Produto('Chocolate', 10, 7);

        //composicao

        $p1->addCaracteristica('Cor', 'Branco');
        $p1->addCaracteristica('Peso', '2.6 Kg');
        $p1->addCaracteristica('Potência', '20 watts RMS');

        print 'Produto: '. $p1->getDescricao(). "<br>";
        foreach ($p1->getCaracteristica() as $c) {
          print 'Caracteristica: '. $c->getNome(). ' - '. $c->getValor(). "<br>";
        }
        echo "<br>";
        var_dump($p1);
       ?>
    </div>
  </body>
</html>
