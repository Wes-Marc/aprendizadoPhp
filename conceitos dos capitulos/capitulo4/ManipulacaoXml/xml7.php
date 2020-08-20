<?php
// interpreta o documento xml
$xml = simplexml_load_file('paises4.xml');

echo 'Nome: '. $xml->nome . "<br>\n";
echo 'Idioma: '. $xml->idioma. "<br>\n";
echo "<br>\n";
echo "*** Estados ***<br>\n";
// percorre a lista de Estados
foreach ($xml->estados->estado as $estado) {
  // imprime o estado e a capital
  echo str_pad('Estado: '  . $estado['nome'], 30).
              'Capital: '  . $estado['capital'] . "<br>\n";
}
