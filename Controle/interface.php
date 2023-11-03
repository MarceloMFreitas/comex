<?php
// Interface para Meio de Pagamento
interface MeioDePagamento {
    public function processarPagamento($valor);
    public function imprimirComprovante();
}

 
class Pix implements MeioDePagamento {
    public function processarPagamento($valor) {
        // Lógica de processamento de pagamento via Pix
        echo "Pagamento de R$$valor via Pix processado com sucesso.\n";
    }

    public function imprimirComprovante() {
        echo "Comprovante de pagamento via Pix gerado.\n";
    }
}


class CartaoDeCredito implements MeioDePagamento {
    private $numeroCartao;

    public function __construct($numeroCartao) {
        $this->numeroCartao = $numeroCartao;
    }

    public function processarPagamento($valor) {
        // Lógica de processamento de pagamento via Cartão de Crédito
        echo "Pagamento de R$$valor via Cartão de Crédito ($this->numeroCartao) processado com sucesso.\n";
    }

    public function imprimirComprovante() {
        echo "Comprovante de pagamento via Cartão de Crédito gerado.\n";
    }
}


class Boleto implements MeioDePagamento {
    private $codigoDeBarras;

    public function __construct($codigoDeBarras) {
        $this->codigoDeBarras = $codigoDeBarras;
    }

    public function processarPagamento($valor) {
        // Lógica de processamento de pagamento via Boleto
        echo "Pagamento de R$$valor via Boleto (Código de Barras: $this->codigoDeBarras) processado com sucesso.\n";
    }

    public function imprimirComprovante() {
        echo "Comprovante de pagamento via Boleto gerado.\n";
    }
}