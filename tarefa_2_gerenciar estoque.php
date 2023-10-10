<?php

$produtos = ['notebook' => ['preco' => 3000 , 'estoque' => 5],
            'video game' => ['preco' => 1500 , 'estoque' => 10],
            'smartphone' => ['preco' => 2000 , 'estoque' => 8],
            'tablet' => ['preco' => 1200 , 'estoque' => 7],
            'wearables' => ['preco' => 800 , 'estoque' => 2]];

foreach ($produtos as $nome => $produto) {
    echo 'Nome: ' .  $nome . ', Preço: ' . $produto['preco'] . ', Estoque: ' . $produto['estoque'] . PHP_EOL;
}




function adicionar_produto(array $produto, float $adicionar): array
{
    if ($adicionar > 0) {
        $produto['estoque'] += $adicionar;
        echo "produto adicionado". PHP_EOL;
    } else {
        echo "impossivel adicionar estoque negativo" . PHP_EOL;
    }
    return $produto;
}


$produtos['notebook'] = adicionar_produto($produtos['notebook'],2);


echo 'Atualização' . PHP_EOL;
foreach ($produtos as $nome => $produto) {
    echo 'Nome: ' .  $nome . ', Preço: ' . $produto['preco'] . ', Estoque: ' . $produto['estoque'] . PHP_EOL;
}


function retirar_produto(array $produto, float $retirar): array
{
    if ($retirar > $produto['estoque']) {
        echo "Quantidade insuficiente em estoque" . PHP_EOL;
    } else {
        $produto['estoque'] -= $retirar;
         echo "produto retirado do estoque " . PHP_EOL;
    
    }

    return $produto;
}

$produtos['video game'] = retirar_produto($produtos['video game'],2);




echo 'Atualização' . PHP_EOL;
foreach ($produtos as $nome => $produto) {
    echo 'Nome: ' .  $nome . ', Preço: ' . $produto['preco'] . ', Estoque: ' . $produto['estoque'] . PHP_EOL;
}


?>