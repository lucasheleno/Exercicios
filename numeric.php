<?php

echo "Digite: ".PHP_EOL;
$var = readline();
if (is_numeric($var)){
    echo "$var é Númerico";
} else {
    echo "$var Não é Númerico";
}