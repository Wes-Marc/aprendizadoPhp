<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/heranca.css">
    <title>Conceito de Herança Poo</title>
  </head>
  <body>
    <div>
      <?php
        require_once 'class/Conta.php';
        require_once 'class/ContaPoupanca.php';
        require_once 'class/ContaCorrente.php';

        
        $contas = array();
        $contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
        $contas[] = new ContaPoupanca(6678, "PP.1234.57", 100);

        foreach ($contas as $key => $conta) {
          print "Conta: {$conta->getInfo()}<br>";
          print "   saldo atual: {$conta->getSaldo()}<br>";
          $conta->depositar(200);
          print "  Depósito de: 200 <br>";
          print "  Saldo atual: {$conta->getSaldo()} <br>";

          if ($conta->retirar(700)) {
            print "  Retirada de: 700 <br>";
          }
          else {
            print "  Retirada de: 700 (não permitida)<br>";
          }
          print "  Saldo atual: {$conta->getSaldo()}<br>";
        }
       ?>
    </div>
  </body>
</html>
