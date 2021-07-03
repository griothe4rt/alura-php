<?php

require_once 'funcoes.php'; #include ou require diferem se o arquivo é essencial para o funcionamento ou não
                        #require_once verifica se o arquivo ja foi incluido anteriormente

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'], 
    100
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'], 
    500
);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta; #a função list pode ser substituida por []
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}

/* Passagem por referência usa o & comercial.
E fazer o que quiser com ela. Qualquer alteração feita vai ser na variavel original 

A função unset() pode receber mais de uma variavel por vez e serve para "excluir" uma variavel
*/