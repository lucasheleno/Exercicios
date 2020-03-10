<?php

$livro = ["História", "Geografia", "Matemática"];
$usuario = ["Professor", "Aluno"];

echo "Qual livro vai precisar? ";
$empliv = readline();
echo "Para que usuario vai emprestar? ";
$empuse = readline();

if (is_numeric($empliv) or is_numeric($empuse)) {
    echo "Por favor inserir descrições validas!";
} if ($empliv === "História" and $empuse === "Professor"){
    print_r("O Usuário " . $usuario[0] . " pegou o livro de " . $livro[0]);
}
