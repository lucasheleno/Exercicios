<?php

$l = 3;
$v1 = readline();

if ($v1 % 2 == 0) {
    $l--;
    echo "$v1 é Divisivel por 2" . PHP_EOL;
}
if ($v1 % 5 == 0) {
    $l--;
    echo "$v1 é Divisivel por 5" . PHP_EOL;
}
if ($v1 % 10 == 0) {
    $l--;
    echo "$v1 é Divisivel por 10" . PHP_EOL;
}

if ($l == 3) {
    echo "$v1 não é divisivel por nenhum";
}
