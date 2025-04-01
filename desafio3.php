<?php

$contas = [
    ["numero" => "123456", "cpf" => "888.888.888-00", "saldo" => 22.5],
    ["numero" => "654321", "cpf" => "777.777.777-00", "saldo" => 1450.00],
    ["numero" => "456123", "cpf" => "555.555.555-00", "saldo" => 345.00],
];

do {
    $numeroConta = readline("Digite o número para consulta: ");

    $contaEncontrada = null;
    foreach ($contas as $conta) {
        if ($conta["numero"] === $numeroConta) {
            $contaEncontrada = $conta;
            break;
        }
    }

    if ($contaEncontrada) {
        echo "===detalhes da conta===\n";
        echo "numero da conta: " . $contaEncontrada["numero"] . "\n";
        echo "cpf do proprietário: " . $contaEncontrada["cpf"] . "\n";
        echo "saldo: R$ " . number_format($contaEncontrada["saldo"], 2, ',', '.') . "\n";
        break;
    } else {
        echo "conta não encontrada. tente novamente.\n";
    }
} while (true);