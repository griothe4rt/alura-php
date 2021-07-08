<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$lucas =  new Conta(new Titular(new Cpf('123.456.789-10'), 'Lucas Bomfim')); #Por conta do metodo Construct não consigo mais criar Conta sem passar os parametros
$primeiraConta = new Conta($lucas);
$primeiraConta->deposita(500);
$primeiraConta->saca(100); #essa forma está correta
# $primeiraConta->saldo -= 300; Porem, isso aqui dá um problema de segurança, deixando o saldo negativo

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$patricia = new Conta(new Titular(new Cpf('987.654.321-01'), 'Patricia'));
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new Cpf('1263'), 'adssada'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();