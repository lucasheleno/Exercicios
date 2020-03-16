<?php

echo "Digite o número: " . PHP_EOL;
$numero = readline();

echo "A Tabuada de $numero é: " . PHP_EOL;

for ($i = 1; $i < 10; $i++) {

    if (!is_numeric($numero)) {
        echo "Falha";
        exit;
    }
    echo $numero . "x" . $i . "= " . $i * $numero . PHP_EOL;
}
