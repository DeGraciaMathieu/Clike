<?php

require __DIR__ . '/vendor/autoload.php';

$clear = new \DeGraciaMathieu\Clike\Clear;


$command = new \DeGraciaMathieu\Clike\Command;
dump($command->execute($clear));


// $terminal = new \DeGraciaMathieu\Clike\Terminal([
// 	DeGraciaMathieu\Clike\Clear::class
// ]);
// dump($terminal->execute('/clear'));