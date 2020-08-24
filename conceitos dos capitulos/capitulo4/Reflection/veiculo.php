<?php

class Veiculo
{
  protected $ano;
  protected $cor;
  protected $marca;
  protected $parts;

  public function getParts()
  {
    // code...
  }
  public function setMarca($marca)
  {
    // code...
  }
}

class Automovel extends Veiculo
{
  private $placa;
  const RODAS = 4;

  public function setPlaca($placa)
  {
    // code...
  }
  public function getPlaca()
  {
    // code...
  }

}
