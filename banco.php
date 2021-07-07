<?php

require_once 'src/Conta.php';

$primeiraConta =  new Conta('123.456.789-10', 'Lucas Bomfim'); #Por conta do metodo Construct não consigo mais criar Conta sem passar os parametros
var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(100); #essa forma está correta
# $primeiraConta->saldo -= 300; Porem, isso aqui dá um problema de segurança, deixando o saldo negativo

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;