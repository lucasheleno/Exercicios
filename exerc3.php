<?php

function calculaPorcentagem($valor, $porc)
{
    if (!is_numeric($valor) or !is_numeric($porc)) {
        echo "Valor não é numérico";
        exit;
    }
    return "O resultado é: " . $valor * ($porc / 100);
}

echo "Digite o valor: ";
$var = readline();
echo "Digite a porcentagem sobre ele: ";
$porc = readline();

echo calculaPorcentagem($var, $porc);