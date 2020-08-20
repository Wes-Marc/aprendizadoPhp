<?php

require_once 'Pessoa.php';
require_once 'Cidade.php';

$teste = new Pessoa;
var_dump($teste->all());
//Pessoa::delete(4);

$town = new Cidade;
var_dump($town->all());
