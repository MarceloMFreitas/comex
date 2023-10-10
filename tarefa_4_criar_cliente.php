<?php

$clientes = ['mariajose@gmail.com' => ['nome' => 'Maria José' , 'celular' => '(13)99999-2244', 'endereco' => 'Rua 1, N30'],
            'luizcarlos@hotmail.com' => ['nome' => 'Luiz Carlos' , 'celular' => '(13)98899-5565', 'endereco' => 'Rua nova, N100,apto - 25']];

foreach ($clientes as $email => $dados) {

    echo "__________________________________________________________" . PHP_EOL;

    echo 'e-mail: ' .   $email . PHP_EOL . 'Nome: ' . $dados['nome'] . PHP_EOL . 'Celular: ' . $dados['celular'] . PHP_EOL . 'Endereço: ' . $dados['endereco'] . PHP_EOL;

    echo "__________________________________________________________" . PHP_EOL;
}

?>