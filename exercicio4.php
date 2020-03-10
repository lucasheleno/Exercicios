<?php

$v1 = readline();
$v2 = readline();
$v3 = readline();

$valores = [$v1, $v2, $v3];

sort($valores);
foreach ($valores as $valor)
    echo "> " . $valor . PHP_EOL;

//     $valores = [];

// $v1 = readline();
// $v2 = readline();
// $v3 = readline();

// array_push($valores, $v1);
// array_push($valores, $v2);
// array_push($valores, $v3);

// sort($valores);
// foreach ($valores as $valor)
//     echo "> " . $valor . PHP_EOL;