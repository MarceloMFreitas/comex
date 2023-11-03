<?php

require 'Modelo\Cliente\Cliente.php';


use Comex\Modelo\Cliente\Cliente;

$cliente = new Cliente('Maria Jose', 'mariajose@gmail.com', '(13)99999-2244', 'Rua 1, N30', 5);

// Exibindo os valores atribuídos à classe
echo "Nome: " . $cliente->getNome() . "\n";
echo "E-mail: " . $cliente->getEmail() . "\n";
echo "Celular: " . $cliente->getCelular() . "\n";
echo "Endereço: " . $cliente->getEndereco() . "\n";
echo "Total de Compras: " . $cliente->getTotalCompras() . "\n";
?>