<?php
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase {
    public function testGetNome() {
        $produto = new Produto('Produto X', 15.0, 10);
        $this->assertEquals('Produto X', $produto->getNome());
    }

    public function testGetPreco() {
        $produto = new Produto('Produto Y', 20.0, 8);
        $this->assertEquals(20.0, $produto->getPreco());
    }

    public function testGetQuantidade() {
        $produto = new Produto('Produto Z', 10.0, 5);
        $this->assertEquals(5, $produto->getQuantidade());
    }
}
?>