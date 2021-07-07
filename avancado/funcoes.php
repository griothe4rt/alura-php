<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function saca(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;   
}

function deposita(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) { 
    $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Não é possível depositar um valor negativo.');
    }
    return $conta;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>"; #forma simples e complexa, respectivamente
}