<?php

$numero = readline();

for ($i = 1; $i < 10; $i++) {

    if (!is_numeric($numero)) {
        echo "Falha";
        exit;
    }
    echo $numero . "x" . $i . "= " . $i * $numero . PHP_EOL;
}
