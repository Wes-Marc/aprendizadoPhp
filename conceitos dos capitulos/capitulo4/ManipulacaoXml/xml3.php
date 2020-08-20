<?php
// interpreta o documento xml
$xml = simplexml_load_file('paises.xml');

// percorre o arquivo com metodo 'children' o que permite visualizar key/value
// sem saber seus nomes.

foreach ($xml->children() as $elemento => $valor) {
  echo "$elemento -> $valor<br>\n";
}
