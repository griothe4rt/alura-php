<?php

$nome = 'Victor';
$idade = 20;

echo "Você só pode entrar se tiver mais do que 18 anos e for o $nome." . PHP_EOL;

if ($idade >= 18 and $nome == 'Lucas') {
    echo "Você tem $idade anos e se chama $nome. Pode entrar!" . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar" . PHP_EOL;
}