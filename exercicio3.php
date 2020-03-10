<?php

echo "Digite seu nome: ";
$nome = readline() . PHP_EOL;
echo "Digite seu sexo: (Masculino ou Feminino)";
$sexo = readline() . PHP_EOL;
echo "Digite sua idade: ";
$idade = readline() . PHP_EOL;

if ($sexo == "Feminino"  and $idade < 25) {
    echo "$nome ACEITA!";
    exit;
}

echo "$nome NÃO ACEITO!";