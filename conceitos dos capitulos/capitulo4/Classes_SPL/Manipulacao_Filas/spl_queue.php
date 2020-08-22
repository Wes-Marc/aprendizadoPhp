<?php
$ingredientes = new SplQueue();

// acrescentando na fila
$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');
foreach ($ingredientes as $item) {
  print 'Item: '. $item. "<br>". PHP_EOL;
}
print "<br>";

// removendo da fila
print $ingredientes->dequeue(). "<br>";
print 'Count: '. $ingredientes->count(). "<br>";
print $ingredientes->dequeue(). "<br>";
print 'Count: '. $ingredientes->count(). "<br>";
print $ingredientes->dequeue(). "<br>";
print 'Count: '. $ingredientes->count(). "<br>";
