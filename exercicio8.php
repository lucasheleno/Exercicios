<?php

echo "Digite o número que você quer o Produto: ".PHP_EOL;
$ini = 0;
$num = readline();

while($ini < $num){
    $ini++;
    $ok = $ini * $ini;
    echo "O Produto de $ini é $ok".PHP_EOL;
}