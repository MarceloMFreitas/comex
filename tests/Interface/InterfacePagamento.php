<?php
	interface PagamentoApi {
    public function processarPagamento($valor);
    public function gerarComprovante();
}
?>