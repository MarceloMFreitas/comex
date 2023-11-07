<?php 
use Comex\Modelo\Produto\Pedido;

class PedidoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Pedido $pedido) {
        $stmt = $this->pdo->prepare('INSERT INTO Pedido (clienteId, dataPedido, valorTotal, status) VALUES (?, ?, ?, ?)');
        $stmt->execute([$pedido->getCliente(), $pedido->getProdutos() ]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Pedido WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Pedido $pedido) {
        $stmt = $this->pdo->prepare('UPDATE Pedido SET clienteId = ?, dataPedido = ?, valorTotal = ?, status = ? WHERE id = ?');
        $stmt->execute([$pedido->getCliente(), $pedido->getProdutos()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Pedido WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>