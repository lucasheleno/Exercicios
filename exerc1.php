<?php

function CalculoImc($peso, $altura)
{
    if ($calc = $peso / $altura ** 2);
    return $calc;
}

echo "Digite seu peso: " . PHP_EOL;
$peso = readline();
echo "Digite sua altura: " . PHP_EOL;
$altura = readline();
$calc = CalculoImc($peso, $altura);
echo "Seu IMC é $calc";