<?php

$file = new SplFileInfo('spl_file_info.php');
print 'Nome: '. $file->getFileName(). "<br>\n";
print 'Extensão: '. $file->getExtension(). "<br>\n";
print 'Tamanho: '. $file->getSize(). "<br>\n";
print 'Caminho: '. $file->getRealPath(). "<br>\n";
print 'Tipo: '. $file->getType(). "<br>\n";
print 'Gravação: '. $file->isWritable(). "<br>\n";
