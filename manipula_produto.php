<?php

use Comex\Modelo\Produto\Produto;

$produto = new Produto('Notebook', 3000, 5);

echo "Inicial---------------------------------------------------------------\n";
echo "Nome do Produto: " . $produto->getNome() . "\n";
echo "Preço do Produto: $" . $produto->getPreco() . "\n";
echo "Quantidade em Estoque: " . $produto->getQuantidade() . "\n";
echo "Valor Total em Estoque: $" . $produto->calcularValorTotal() . "\n";


$produto->adicionarProduto(2);

echo "Adiciona 2 -----------------------------------------------------------\n";
echo "Nome do Produto: " . $produto->getNome() . "\n";
echo "Preço do Produto: $" . $produto->getPreco() . "\n";
echo "Quantidade em Estoque: " . $produto->getQuantidade() . "\n";
echo "Valor Total em Estoque: $" . $produto->calcularValorTotal() . "\n";

$produto->removerProduto(1);

echo "Remove 1 --------------------------------------------------------------\n";
echo "Nome do Produto: " . $produto->getNome() . "\n";
echo "Preço do Produto: $" . $produto->getPreco() . "\n";
echo "Quantidade em Estoque: " . $produto->getQuantidade() . "\n";
echo "Valor Total em Estoque: $" . $produto->calcularValorTotal() . "\n";

?>