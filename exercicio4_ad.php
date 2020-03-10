<?php

$valores = [];

while (true) {

    echo "Digite um número valido: " . PHP_EOL;
    $var = readline();

    if (strtolower(trim($var)) === 'sair' or strtolower(trim($var)) === 'mostrar')
        break;

    if (!is_numeric($var)) {
        echo "Valor digitado não é um número!" . PHP_EOL;
        continue;
    }
    echo "Adicionado número ao Array!" . PHP_EOL;
    array_push($valores, $var);
}
echo "Os valores organizados são: " . PHP_EOL;
rsort($valores);

foreach ($valores as $valor)
    echo "> " . $valor . PHP_EOL;
// print_r($valores);
