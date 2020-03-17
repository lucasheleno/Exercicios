<?php

echo "Digite o número que você quer o Produto: ".PHP_EOL;
$ini = 1;
$num = readline();

while($ini < $num){
    $produto = $ini * $num;
    echo "O Produto de $ini é $produto".PHP_EOL;
    $ini++;
}