<?php
// cria instancia da classe DOMDocument
// e carrega o arquivo xml
$doc = new DOMDocument();
$doc->load('bases.xml');

$bases = $doc->getElementsByTagName("base");
foreach ($bases as $base) {
  print 'ID: '. $base->getAttribute('id'). '<br>'.PHP_EOL;
  $names = $base->getElementsByTagName('name');
  $hosts = $base->getElementsByTagName('host');
  $types = $base->getElementsByTagName('type');
  $users = $base->getElementsByTagName('user');

  $name = $names->item(0)->nodeValue;
  $host = $hosts->item(0)->nodeValue;
  $type = $types->item(0)->nodeValue;
  $user = $users->item(0)->nodeValue;

  print 'Name: '. $name . "<br>\n";
  print 'Host: '. $host . "<br>\n";
  print 'Type: '. $type . "<br>\n";
  print 'User: '. $user . "<br>\n";
  print "<br>\n";
}
