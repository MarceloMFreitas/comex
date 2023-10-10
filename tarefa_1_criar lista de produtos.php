<?php
$produtos = array(
    array('nome' => 'Notebook', 'preco' => 3000),
    array('nome' => 'Video Game', 'preco' => 1500),
    array('nome' => 'Smartphone', 'preco' => 2000),
    array('nome' => 'Tablet', 'preco' => 1200),
    array('nome' => 'Wearabes', 'preco' => 800),
);

// Exibir os produtos
foreach ($produtos as $produto) {
    echo 'Nome: ' . $produto['nome'] . ', Preço: ' . $produto['preco'] . '<br>';
}
?>