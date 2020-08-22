<?php

$file = new SplFileObject('splFileObject2.php');

print 'Forma 1: '. "<br>";
while (!$file->eof()){
  print "linha: ". $file->fgets(). "<br>";
}
print "<br>". "<br>";

print "Forma 2: ". "<br>";
foreach ($file as $linha => $conteudo) {
  print "$linha: $conteudo<br>";
}
