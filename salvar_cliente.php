<?php 
use Comex\Modelo\Cliente\Cliente;

require 'Repositorio/DAOCliente.php'; 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];


    $clienteDAO = new ClienteDAO($pdo); 
    
    $cliente = new Cliente($nome, $email, $celular, $endereco,$totalcompras);

    
    $clienteDAO->salvar($cliente);

    
    header("Location: sucesso.html");
    exit;
}


?>