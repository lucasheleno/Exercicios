<?php

$livros = ["História", "Geografia", "Matemática"];
$usuarios = ["Professor", "Aluno"];
$retornos = ["Professor" => "10 dias", "Aluno" => "3 dias"];

echo "Qual livro vai precisar? ";
$empliv = readline();
echo "Para qual usuario vai emprestar? ";
$empuse = readline();

if (is_numeric($empliv) or is_numeric($empuse)) {
    echo "Por favor inserir descrições validas!";
    exit;
}

foreach ($livros as $livro) {
    if ($livro === $empliv) {
        $livroValidado = $livro;
        break;
    }
}

foreach ($usuarios as $usuario) {
    if ($usuario === $empuse) {
        $usuarioValidado = $usuario;
        break;
    }
}

if (isset($usuarioValidado) and isset($livroValidado)) {
    $dias = $retornos[$usuarioValidado];
    echo "O $usuarioValidado pegou o livro de $livroValidado e 
    tem $dias para devolver.";
} else {
    echo "Livro ou Usuário inválido";
}
