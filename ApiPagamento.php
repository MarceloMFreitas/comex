<?php
	class PagamentoApiMock implements PagamentoApi {
    private $processado = false;
    
    public function processarPagamento($valor) {
        // Simulando o processamento do pagamento (pode ser qualquer lógica de simulação)
        $this->processado = true;
    }

    public function gerarComprovante() {
        // Simulando a geração de um comprovante (pode ser qualquer lógica de simulação)
        return "Comprovante de pagamento gerado";
    }

    public function foiProcessado() {
        return $this->processado;
    }
}
?>