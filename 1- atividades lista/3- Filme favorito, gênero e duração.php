<?php
echo "ola seja bem vindo".PHP_EOL;

echo "voce chegou numa sessao de cinema".PHP_EOL;

echo "digite o seu filme favorito:" .PHP_EOL;
$filme= fgets(STDIN);

echo "Digite a Duração do filme:".PHP_EOL;
$duracao= fgets(STDIN);

echo "Digite o Genero do filme".PHP_EOL;
$genero=fgets(STDIN);

echo " filme escolhido:".PHP_EOL;

echo "nome:".$filme;
echo "duração:".$duracao;
echo "genero: ".$genero;
