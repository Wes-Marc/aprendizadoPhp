<?php

class Servico implements OrcavelInterface
{
  private $descricao;
  private $preco;

  function __construct($descricao, $preco)
  {
    $this->descricao = $descricao;
    $this->preco = $preco;
  }
  public function getDescricao()
  {
    return $this->descricao;
  }
  public function getPreco()
  {
    return $this->preco;
  }
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }
  public function setPreco($preco)
  {
    $this->preco = $preco;
  }
}
