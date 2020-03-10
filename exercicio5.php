<?php

echo "Por favor insira 3 lados do Triangulo" . PHP_EOL;

echo "Lado 1: " . PHP_EOL;
$lado1 = readline();
echo "Lado 2: " . PHP_EOL;
$lado2 = readline();
echo "Lado 3: " . PHP_EOL;
$lado3 = readline();

if ($lado1 === $lado2 and $lado1 === $lado3 and $lado3 === $lado2) {
    echo "Triângulo Equilatero!";
} else if ($lado1 !== $lado2 and $lado1 !== $lado3 and $lado3 !== $lado2) {
    echo "Triângulo Escaleno!";
} else if ($lado1 === $lado2 || $lado1 === $lado3 || $lado3 === $lado2) {
    echo "Triângulo Isósceles!";
}
