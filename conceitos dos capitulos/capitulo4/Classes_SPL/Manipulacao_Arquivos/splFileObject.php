<?php

$file = new SplFileObject('spl_file_info.php');
print 'Nome: '. $file->getFileName(). "<br>\n";
print 'Extensão: '.$file->getExtension(). "<br>\n";

$file2 = new SplFileObject("novo.txt", "w");
$bytes = $file2->fwrite('Olá Mundo PHP'. PHP_EOL);
print 'Bytes escritos '.$bytes . PHP_EOL;
