<?php

$livros = ["História", "Geografia", "Matemática"];
$usuarios = ["Carlos", "Pedro"];

echo "Qual livro vai precisar? ";
$empliv = readline();
echo "Para que usuario vai emprestar? ";
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

if(isset($usuarioValidado) and isset($livroValidado)){
    echo "Livro $livroValidado emprestado à $usuarioValidado! :)";
}else{
    echo "livro ou usuário inválido";
} 