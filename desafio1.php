<?php
$senhaDefinida = ("JaoCabecao");

do {
    $senha = readline("Digite a senha: ");

    if ($senhaDefinida == $senha) {
        echo "Login efetuado com sucesso!" . PHP_EOL;
    }

    if( $senhaDefinida != $senha) {
        echo "Senha errada! Tente novamente." . PHP_EOL;
    }

} while ($senhaDefinida != $senha);







