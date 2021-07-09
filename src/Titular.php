<?php

class Titular
{
    private CPF $CPF;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNomeTitular($nome);
        $this->CPF = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->CPF->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
