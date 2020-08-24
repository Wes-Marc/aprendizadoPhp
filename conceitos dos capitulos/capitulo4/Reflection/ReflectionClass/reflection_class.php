<?php
require_once '../veiculo.php';

$rc = new ReflectionClass('Automovel');
var_dump($rc->getMethods());
var_dump($rc->getProperties());
var_dump($rc->getParentClass());
