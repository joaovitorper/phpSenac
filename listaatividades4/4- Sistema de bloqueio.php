<?php

$usuario;
$senha;
$tentativas = 0;

while ($tentativas < 3) {

    echo "Digite o usuário: ";
    $usuario = trim(fgets(STDIN));

    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if ($usuario == "admin" && $senha == "1234") {
        echo "Acesso permitido\n";
        break;
    } else {
        echo "Acesso negado\n";
        $tentativas++;
    }
}

if ($tentativas >= 3) {
    echo "Conta bloqueada\n";
}

?>