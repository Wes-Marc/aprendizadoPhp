<?php
// interpreta o documento xml
$xml = simplexml_load_file('paises2.xml');

// acessa o nodo filho 'geografia'
echo 'Nome: '. $xml->nome. "<br>\n";
echo 'Idioma: '. $xml->idioma. "<br>\n";
echo "<br>\n";
echo "*** Informações Geográficas ***<br>\n";
echo 'Clima: '. $xml->geografia->clima. "<br>\n";
echo 'Costa: '. $xml->geografia->costa. "<br>\n";
echo 'Pico: '. $xml->geografia->pico. "<br>\n";
