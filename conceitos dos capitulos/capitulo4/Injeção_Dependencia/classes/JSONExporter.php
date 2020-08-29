<?php

/**
 * Essa classe exporta dados em formato json
 */
class JSONExporter
{
  public function export($data)
  {
    return json_encode($data);
  }

}
