<?php
require_once 'classes/Record.php';
require_once 'classes/XMLExporter.php';
require_once 'classes/JSONExporter2.php';
require_once 'Interfaces/ExporterInterface.php';

/**
 * Classe Pessoa que implementa o conceito de injecao de dependencia
 * por uma interface, o que coloca o controle de qual algoritmo de exportacao
 * usar, nas mãos do usuario
 */
class Pessoa extends Record
{
  const TABLENAME = 'pessoas';

  public function export(ExporterInterface $e)
  {
    return $e->export($this->data);
  }
}

$p = new Pessoa();
$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
print $p->export(new XMLExporter);

echo "<br><br>";

print $p->export(new JSONExporter);
