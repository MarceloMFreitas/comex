<?php
	use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase {
    public function testAdicionarProdutoAoPedido() {
        $cliente = new Cliente('João Silva', 'joao.silva@example.com', '1234567890', 'Rua A, 123', 5);
        $pedido = new Pedido(1, $cliente, array());

        $produto = new Produto('Produto A', 10.5);
        $pedido->adicionarProduto($produto);
        
        $this->assertCount(1, $pedido->getProdutos());
    }

    public function testCalcularTotalDoPedido() {
        $cliente = new Cliente('Maria Santos', 'maria.santos@example.com', '9876543210', 'Av. B, 456', 7);
        $pedido = new Pedido(2, $cliente, array());

        $produto1 = new Produto('Produto B', 15.0);
        $produto2 = new Produto('Produto C', 25.0);

        $pedido->adicionarProduto($produto1);
        $pedido->adicionarProduto($produto2);

        $totalEsperado = 15.0 + 25.0;
        $this->assertEquals($totalEsperado, $pedido->calcularTotal());
    }
}
?>