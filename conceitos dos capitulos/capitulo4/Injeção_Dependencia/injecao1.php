<?php
require_once 'classes/Record.php';
require_once 'classes/JSONExporter.php';

/**
 * Classe Pessoa onde cria uma instancia de JSONExporter
 * tendo assim uma injecao de dependencia
 * mas ainda de uma forma acoplada
 */
class Pessoa extends Record
{
  const TABLENAME = 'pessoas';

  public function toJSON()
  {
    $je = new JSONExporter;
    return $je->export($this->data);
  }
}

$p = new Pessoa();
$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
print $p->toJSON();
