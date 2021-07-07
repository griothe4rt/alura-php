<?php

require_once 'src/Conta.php';

$primeiraConta =  new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300); #essa forma está correta
# $primeiraConta->saldo -= 300; Porem, isso aqui dá um problema de segurança, deixando o saldo negativo
$primeiraConta->defineCpfTitular('123.456.789-10');

echo $primeiraConta->recuperaSaldo();