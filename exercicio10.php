<?php

// $numerosPosit = [];
// $numerosNegat = [];
// $i = 0;

// while ($i < 3) {
//     echo "Digite números: ";
//     $entrada = readline();

//     if (!is_numeric($entrada)) {
//         echo "Valor não númerico." . PHP_EOL;
//         continue;
//     }
//     if ($entrada > 0) {
//         echo "Adcionado" . PHP_EOL;
//         array_push($numerosPosit, $entrada);
//     } else {
//         echo "Adcionado" . PHP_EOL;
//         array_push($numerosNegat, $entrada);
//     }

//     $i++;
// }
// foreach ($numerosPosit as $numeroP) {
//     echo "Positivo " . $numeroP . PHP_EOL;
// }
// foreach ($numerosNegat as $numeroN) {
//     echo "Negativo " . $numeroN . PHP_EOL;
// }

$somaPos = 0;
$totalNeg = 0;

for($i = 0; $i < 20; $i ++){
    $num = readline();
    
    if(!is_numeric($num)){
        echo "erro";
        exit;
    }

    if($num > 0){
        $somaPos = $somaPos+$num;
    }else{
        $totalNeg ++;
    }
}

echo "Soma positivos $somaPos";
echo "Total negativos $totalNeg";