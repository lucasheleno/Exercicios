<?php

$produtos = [];

while (true) {
    echo PHP_EOL . "1 - VER | 2 - ADICIONAR" . PHP_EOL;
    $var = readline();
    if ($var === "1") {
        if (count($produtos) < 1)
            echo "Nenhum produto cadastrado" . PHP_EOL;
        foreach ($produtos as $produto)
            echo "Produto: " . $produto . PHP_EOL;
    } elseif ($var === "2") {

        while (true) {
            echo "Digite um produto: ";
            $item = readline();

            if ($item === '0')
                break;

            array_push($produtos, $item);
            echo "Produto adicionado" . PHP_EOL;
        }
    }
}
