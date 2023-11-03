<?php
    use PHPUnit\Framework\TestCase;

class CarrinhoDeComprasTest extends TestCase {
    public function testAdicionarProduto() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto('Produto A', 10.5);
        $carrinho->adicionarProduto($produto);
        
        $this->assertCount(1, $carrinho->getProdutos());
    }

    public function testRemoverProduto() {
        $carrinho = new CarrinhoDeCompras();
        $produto1 = new Produto('Produto A', 10.5);
        $produto2 = new Produto('Produto B', 20.0);
        $carrinho->adicionarProduto($produto1);
        $carrinho->adicionarProduto($produto2);

        $carrinho->removerProduto($produto1);

        $this->assertCount(1, $carrinho->getProdutos());
    }

    public function testCalcularTotal() {
        $carrinho = new CarrinhoDeCompras();
        $produto1 = new Produto('Produto A', 10.5);
        $produto2 = new Produto('Produto B', 20.0);
        $carrinho->adicionarProduto($produto1);
        $carrinho->adicionarProduto($produto2);

        $totalEsperado = 10.5 + 20.0;
        $this->assertEquals($totalEsperado, $carrinho->calcularTotal());
    }
}
?>