<?php
echo "Digite seu nome de usuário: " . PHP_EOL;
$username = fgets(STDIN);

echo "Digite uma pequena descrição sobre você: " . PHP_EOL;
$descricao = fgets(STDIN);

echo "Cadastro realizado!" . PHP_EOL;
echo "Usuário: $username";
echo "Descrição: $descricao";