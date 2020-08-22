<?php
$dir = str_replace("\\", "/", __DIR__);

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir,
            RecursiveDirectoryIterator::SKIP_DOTS)) as $item)
{
  print (string) $item . "<br>";
}
