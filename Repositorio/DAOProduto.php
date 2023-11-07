<?php 
use Comex\Modelo\Produto\Produto;


class ProdutoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Produto $produto) {
        $stmt = $this->pdo->prepare('INSERT INTO Produto (nome, preco, quantidadeEmEstoque) VALUES (?, ?, ?)');
        $stmt->execute([$produto->getNome(), $produto->getPreco(), $produto->getQuantidade()]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Produto WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Produto $produto) {
        $stmt = $this->pdo->prepare('UPDATE Produto SET nome = ?, preco = ?, quantidadeEmEstoque = ? WHERE id = ?');
        $stmt->execute([$produto->getNome(), $produto->getPreco(), $produto->getQuantidade()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Produto WHERE id = ?');
        $stmt->execute([$id]);
    }
}




?>