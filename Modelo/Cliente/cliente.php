<?php

namespace Comex\Modelo\Cliente;

class Cliente {
    private $nome;
    private $email;
    private $celular;
    private $endereco;
    private $totalCompras;
    private $pedidos;

    public function __construct($nome, $email, $celular, $endereco, $totalCompras) {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->totalCompras = $totalCompras;
        $this->pedidos = array();
    }


    public function adicionarPedido($pedido) {
        $this->pedidos[] = $pedido;
    }

    
    public function getPedidos() {
        return $this->pedidos;
    }

    public function setPedidos($pedidos) {
        $this->pedidos = $pedidos;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getTotalCompras() {
        return $this->totalCompras;
    }

    public function setTotalCompras($totalCompras) {
        $this->totalCompras = $totalCompras;
    }
 

    public function formatarCelular() {
        $celularFormatado = preg_replace('/^(\d{2})(\d{5})(\d{4})$/', '($1) $2-$3', $this->celular);
        return $celularFormatado;
    }



}