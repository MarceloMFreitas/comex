<?php

use Comex\Modelo\Cliente\Cliente;

class ClienteDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Cliente $cliente) {
        $stmt = $this->pdo->prepare('INSERT INTO Cliente (nome, email, celular, endereco, totalCompras) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$cliente->getNome(), $cliente->getEmail(), $cliente->getCelular(), $cliente->getEndereco(), $cliente->getTotalCompras()]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Cliente WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Cliente $cliente) {
        $stmt = $this->pdo->prepare('UPDATE Cliente SET nome = ?, email = ?, celular = ?, endereco = ?, totalCompras = ? WHERE id = ?');
        $stmt->execute([$cliente->getNome(), $cliente->getEmail(), $cliente->getCelular(), $cliente->getEndereco(), $cliente->getTotalCompras()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Cliente WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>