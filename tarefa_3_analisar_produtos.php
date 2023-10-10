<?php

$produtos = ['notebook' => ['preco' => 3000 , 'estoque' => 5],
            'video game' => ['preco' => 1500 , 'estoque' => 10],
            'smartphone' => ['preco' => 12000 , 'estoque' => 8],
            'tablet' => ['preco' => 1200 , 'estoque' => 7],
            'wearables' => ['preco' => 800 , 'estoque' => 2]];


function obterMaiorPreco($produtos) {
    $maiorPreco = null;

    foreach ($produtos as $produto) {
        if ( $produto['preco'] > $maiorPreco) {
            $maiorPreco = $produto['preco'];
        }
    }

    return $maiorPreco;
}


$maiorPreco = obterMaiorPreco($produtos);

echo 'O maior preço é: ' . $maiorPreco;
?>









