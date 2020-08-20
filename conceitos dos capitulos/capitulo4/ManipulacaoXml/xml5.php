<?php
// interpreta o documento xml
$xml = simplexml_load_file('paises2.xml');

// alteração de propriedades
$xml->moeda = 'Novo Real (NR$)';
$xml->geografia->clima = 'temperado';

// adiciona novo nodo
$xml->addchild('presidente', 'Chapolin Colorado');

// exibe o novo xml
echo $xml->asXML();

// grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());
