<?php


namespace Comex\Modelo\Produto;
use InvalidArgumentException;

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

        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade a ser adicionada deve ser positiva.");
        }
        $this->quantidade += $quantidade;
    }


    public function removerProduto($quantidade) {

        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade a ser removida deve ser positiva.");
        }
        if ($this->quantidade >= $quantidade) {
            $this->quantidade -= $quantidade;
        } else {
            throw new InvalidArgumentException("A quantidade em estoque não pode ser menor que zero.");
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