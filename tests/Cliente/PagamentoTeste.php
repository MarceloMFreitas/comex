<?php
	use PHPUnit\Framework\TestCase;

class PagamentoTest extends TestCase {
    public function testProcessarPagamentoComSucesso() {
        $pagamentoApi = new PagamentoApiMock();
        
        // Chame o método de processamento de pagamento
        $pagamentoApi->processarPagamento(100);
        
        // Verifique se o pagamento foi processado com sucesso
        $this->assertTrue($pagamentoApi->foiProcessado());
        
        // Gere um comprovante e verifique seu conteúdo
        $comprovante = $pagamentoApi->gerarComprovante();
        $this->assertEquals("Comprovante de pagamento gerado", $comprovante);
    }
}

?>