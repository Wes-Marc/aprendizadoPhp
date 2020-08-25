<?php
require_once 'classes/Record.php';
require_once 'trait2.php';
/*  esse arquivo ainda nao implementao conceito de trait,
    é somente parte do passo pra chegar ao conteito final */

class Pessoa extends Record
{
  const TABLENAME = 'pessoas';
  use ObjectConversionTrait;

}

class Fornecedor extends Record
{
  const TABLENAME = 'fornecedores';

}

class Produto extends Record
{
  const TABLENAME = 'produtos';

}

$p = new Pessoa();
$p->load(1);
print "<br>";
$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
$p->save();
print "<br>";
$p->delete(3);
print "<br>";
print $p->toXML();
print "<br>";
print $p->toJSON();
