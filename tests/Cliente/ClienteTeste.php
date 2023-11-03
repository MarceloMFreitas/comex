<?php
	use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase {
    public function testAdicionarPedidoAoCliente() {
        $cliente = new Cliente('João Silva', 'joao.silva@example.com', '1234567890', 'Rua A, 123', 5);
        $pedido = new Pedido(1, $cliente, array());

        $cliente->adicionarPedido($pedido);

        $this->assertCount(1, $cliente->getPedidos());
    }

    public function testCalcularTotalDeComprasDoCliente() {
        $cliente = new Cliente('Maria Santos', 'maria.santos@example.com', '9876543210', 'Av. B, 456', 7);
        $pedido1 = new Pedido(2, $cliente, array());
        $pedido2 = new Pedido(3, $cliente, array());

        $cliente->adicionarPedido($pedido1);
        $cliente->adicionarPedido($pedido2);

        $totalEsperado = 0; // Você deve calcular o valor total das compras com base nos pedidos.
        $this->assertEquals($totalEsperado, $cliente->calcularTotalDeCompras());
    }

    public function testFormatarCelular() {
        $cliente = new Cliente('Ana Silva', 'ana.silva@example.com', '9876543210', 'Av. C, 789', 3);

        $celularFormatado = $cliente->formatarCelular();
        $this->assertEquals('(98) 76543-210', $celularFormatado);
    }
}
?>