<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/agregacao.css">
    <title>Testes do livro</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/Fabricante.php';
        require_once 'class/Produto.php';
        require_once 'class/Caracteristica.php';
        require_once 'class/Cesta.php';

        $c1 = new Cesta;

        //agregacao dos produtos

        $c1->addItem($p1 = new Produto('Chocolate', 10, 5));
        $c1->addItem($p2 = new Produto('Café', 100, 7));
        $c1->addItem($p3 = new Produto('Mostarda', 50, 3));

        foreach ($c1->getItens() as $item) {
          print 'Item: '. $item->getDescricao(). "<br>";
        }
        echo "<br>";
        
        var_dump($c1, $p1, $p2);

       ?>
    </div>
  </body>
</html>
