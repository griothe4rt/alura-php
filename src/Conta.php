<?php

class Conta
{
    private string $cpfTitular; # Propriedades sempre privadas
    private string $nomeTitular;
    private float $saldo; #Iremos deixar private para que apenas a propria Conta possa acessar essa função

    public function __construct(string $cpfTitular, string $nomeTitular) # Define os parametros a serem recebidos para construir essa classe
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void # Apenas metódos públicos
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
            $this->saldo += $valorADepositar;
        }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "É necessário digitar o nome e sobrenome.";
            exit();
        };
    }
}