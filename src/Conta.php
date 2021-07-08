<?php

class Conta
{
    private Titular $titular; # Propriedades sempre privadas
    private float $saldo; #Iremos deixar private para que apenas a propria Conta possa acessar essa função
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular) # Define os parametros a serem recebidos para construir essa classe
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
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

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}