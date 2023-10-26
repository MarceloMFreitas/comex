<?php

require 'CarrinhoDeCompra.php'
require 'produto.php';


$produto1 = new Produto('Notebook', 3000, 5);
$produto2 = new Produto('Video Game', 1500, 2);


$carrinho = new CarrinhoDeCompras();
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

echo "Total da compra: $" . $carrinho->calcularTotal() . "\n";

$percentualDesconto = 10;
$valorFrete = 5.0;

echo "Desconto: $" . $carrinho->calcularDesconto($percentualDesconto) . "\n";
echo "Frete: $" . $valorFrete . "\n";
echo "Total com desconto e frete: $" . $carrinho->calcularValorTotalCompra($percentualDesconto, $valorFrete) . "\n";

?>