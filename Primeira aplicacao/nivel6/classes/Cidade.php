<?php

class Cidade
{
  public static function all()
  {
    $conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=livro", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cidades = $conn->query("SELECT * FROM cidade");
    $result = $cidades->fetchAll();
    return $result;
  }
}
