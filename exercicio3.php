<?php

echo "Coloque seu Nome: " . PHP_EOL;
$nome = readline();
echo "Coloque seu Sexo (Masculino/Feminino): " . PHP_EOL;
$sexo = readline();
echo "Coloque sua idade: " . PHP_EOL;
$idade = readline();

if ($sexo == "Feminino" and $idade > 25) {
    echo "$nome foi aceita!";
    exit;
}
echo "$nome não foi aceito!";
