<?php 
use Comex\Modelo\Produto\Produto;

require 'conexao.php';
require 'Reposotorio\DAOProduto.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
    
        // Criar uma instância do ProdutoDAO
        $produtoDAO = new ProdutoDAO($pdo); 

        $produto = new Produto($nome, $preco, $quantidade);

        $produtoDAO->salvar($produto);
    
        header("Location: sucesso.html");
        exit;
    }

?>