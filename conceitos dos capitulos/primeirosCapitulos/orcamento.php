<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/interface.css">
    <title>Conceito de Interface - Poo Php</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/OrcavelInterface.php';
        require_once 'class/Produto.php';
        require_once 'class/Orcamento.php';
        require_once 'class/Servico.php';

        $o = new Orcamento;
        $o->adiciona(new Produto('Máquina de café', 10, 299), 1);
        $o->adiciona(new Produto('Barbeador elétrico', 10, 170), 1);
        $o->adiciona(new Produto('Barra de chocolate', 10, 7), 3);

        $o->adiciona(new Servico('Corte de grama', 20), 1);
        $o->adiciona(new Servico('Corte de barba', 20), 1);
        $o->adiciona(new Servico('Limpeza do apto', 50), 1);
        print $o->calculaTotal();
       ?>
    </div>
  </body>
</html>
