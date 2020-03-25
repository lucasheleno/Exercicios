<?php

function identficaMes($entrada)
{
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    $entrada--;
    if (!is_numeric($entrada) or $entrada < 0 or $entrada > 11) {
        return "Invalido";
    }
    return $meses[$entrada];
}

$entrada = readline();
$mes = identficaMes($entrada);
echo "Mês : $mes";