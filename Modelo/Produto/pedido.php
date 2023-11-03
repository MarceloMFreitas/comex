<?php

namespace Comex\Modelo\Produto;

class Pedido {
    private $id;
    private $cliente;
    private $produtos;

    public function __construct($id, $cliente, $produtos) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produtos = $produtos;

   
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function setProdutos($produtos) {
        $this->produtos = $produtos;
    }
}
?>