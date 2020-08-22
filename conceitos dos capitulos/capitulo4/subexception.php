<?php
require_once 'classes/CSVParser.php';
$dir = str_replace("\\", "/", __DIR__);
// definição das subclasses de erro

class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

$csv = new CSVParser("{$dir}"."/classes/clientes.csv", ';');
try {
  $csv->parse();  // método que pode lançar erro
  while ($row = $csv->fetch()) {
    print $row['Cliente']. " . ";
    print $row['Cidade']. "<br>\n";
  }
}
catch (FileNotFoundException $excecao) {
  echo "<pre>";
  print_r($excecao->getTrace());
  echo "</pre>";
  die("Arquivo não encontrado");
}
catch (FilePermissionException $excecao){
  echo $excecao->getFile(). ' : '. $excecao->getLine(). ' # '. $excecao->getMessage();
}
