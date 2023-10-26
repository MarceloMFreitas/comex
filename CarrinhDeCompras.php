<?php 


	class CarrinhoDeCompras {
    private $produtos = array();

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function removerProduto(Produto $produto) {
        // Remove o produto da lista
        $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    public function calcularDesconto($percentualDesconto) {
        $total = $this->calcularTotal();
        return $total * ($percentualDesconto / 100);
    }

    public function calcularFrete($valorFrete) {
        return $valorFrete;
    }

    public function calcularValorTotalCompra($percentualDesconto, $valorFrete) {
        $total = $this->calcularTotal();
        $desconto = $this->calcularDesconto($percentualDesconto);
        $total -= $desconto;
        $total += $valorFrete;
        retur
}


?>