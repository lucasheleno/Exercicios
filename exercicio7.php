<?php

$livros = ["História", "Geografia", "Matemática"];
$usuarios = ["Professor", "Aluno"];
$retornos = ["10 dias","3 dias"];

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

foreach ($retornos as $retorno) {
    if ($usuario === "Professor") {
        $retornoOk = $retorno;
        break;
    }
    if ($usuario === "Aluno"){
        $retornoOk = $retorno;
    }
}

if(isset($usuarioValidado) and isset($livroValidado)){
    echo "O $usuarioValidado pegou o livro de $livroValidado e tem $retorno para devolver.";
}else{
    echo "Livro ou Usuário inválido";
}