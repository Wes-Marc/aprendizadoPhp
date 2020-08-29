<?php

/**
 * Interface que contem a definicao do método export()
 * que será implementado pelas classes XMLExporter e JSONExporter
 */
interface ExporterInterface
{
  public function export($data);
}
