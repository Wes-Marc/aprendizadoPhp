<?php
require_once '../veiculo.php';

$rp = new ReflectionProperty('Automovel', 'placa');
print $rp->getName(). "<br>";
print $rp->isPrivate() ? 'É privado' : 'Não é privado';
print "<br>";
print $rp->isStatic() ? 'É estático' : 'Não é estatico';
print "<br>";
