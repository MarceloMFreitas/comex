<?php
class Produto {
    private $nome;
    private $preco;
    private $quantidade;


    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

 
    public function adicionarProduto($quantidade) {
        $this->quantidade += $quantidade;
    }


    public function removerProduto($quantidade) {
        if ($this->quantidade >= $quantidade) {
            $this->quantidade -= $quantidade;
        } else {
            echo "Não há produtos suficientes em estoque para remover.\n";
        }
    }

    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}


?>