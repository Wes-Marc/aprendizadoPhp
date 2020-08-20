<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/associacao.css">
    <title>Testes do livro</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/Fabricante.php';
        require_once 'class/Produto.php';

        $p1 = new Produto('Chocolate', 10, 7);
        $f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123498765');
        $p1->setFabricante($f1);

        print 'A descrição é: '. $p1->getDescricao(). "<br>";
        print 'O fabricante é: '. $p1->getFabricante()->getNome(). "<br>";

        echo "<br>";
        var_dump($p1);
       ?>
    </div>
  </body>
</html>
