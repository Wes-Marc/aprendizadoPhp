<?php
require_once 'classes/Record.php';
require_once 'interfaces/ExporterInterface.php';

/**
 * Classe que implementa a interface ExporterInterface
 * e exporta dados em XML
 */
class XMLExporter implements ExporterInterface
{

  public function export($data)
  {
    $data = array_flip($data);
    $xml = new SimpleXMLElement('<record/>');
    array_walk_recursive($data, array ($xml, 'addChild'));
    return $xml->asXML();
  }
}
