<?php
require_once 'classes/Record.php';
require_once 'Interfaces/ExporterInterface.php';

/**
 * Classe que implementa ExporterInterface
 * e exporta dados em json
 */
class JSONExporter implements ExporterInterface
{

  public function export($data)
  {
    return json_encode($data);
  }
}
