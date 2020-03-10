<?php

echo "Lado 'a' do triangulo: ".PHP_EOL;
$a = readline();
echo "Lado 'b' do triangulo: ".PHP_EOL;
$b = readline();
echo "Lado 'c' do triangulo: ".PHP_EOL;
$c = readline();

$p = ($a + $b + $c) / 2;

$d = ($p * ($p - $a) * ($p - $b) * ($p - $c));

echo "Calculo da área de região triangular é: ".sqrt($d);