<?php

foreach (new DirectoryIterator('../Manipulacao_Arquivos') as $file) {
  print (string) $file. "<br>";
  print 'Nome: '. $file->getFileName(). "<br>";
  print 'Extensao: '. $file->getExtension(). "<br>";
  print 'Tamanho: '. $file->getSize(). "<br>";
  print "<br>";
}
