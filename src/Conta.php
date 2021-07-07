<?php

class Conta
{
    private string $cpfTitular; # Propriedades sempre privadas
    private string $nomeTitular;
    private float $saldo = 0; #Iremos deixar private para que apenas a propria Conta possa acessar essa função

    public function saca(float $ValorASacar): void
    {
        if ($valorASacar > $this->$saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->saldo = $valorASacar;
    }

    public function deposita(float $valorADepositar): void # Apenas metódos públicos
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
            $this->saldo += $valorADepositar;
        }

    public function transfere(float $ValorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($ValorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}