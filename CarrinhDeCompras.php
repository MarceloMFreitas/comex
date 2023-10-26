<?php 


	class CarrinhoDeCompras {
    private $produtos = array();

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function removerProduto(Produto $produto) {
       $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
        } else {
            throw new InvalidArgumentException("Produto não encontrado no carrinho.");
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
        if ($percentualDesconto < 0) {
            throw new LogicException("O percentual de desconto não pode ser negativo.");
        }
        $total = $this->calcularTotal();
        return $total * ($percentualDesconto / 100);
    }

    public function calcularFrete($valorFrete) {
        if ($valorFrete < 0) {
            throw new LogicException("O valor do frete não pode ser negativo.");
        }
        return $valorFrete;
    }

    public function calcularValorTotalCompra($percentualDesconto, $valorFrete) {
        if ($percentualDesconto < 0) {
            throw new LogicException("O percentual de desconto não pode ser negativo.");
        }

        if ($valorFrete < 0) {
            throw new LogicException("O valor do frete não pode ser negativo.");
        }

        $total = $this->calcularTotal();
        $desconto = $this->calcularDesconto($percentualDesconto);
        $total -= $desconto;
        $total += $valorFrete;
        return $total;
    }
}


?>