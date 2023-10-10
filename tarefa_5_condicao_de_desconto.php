<?php

$valor_compra = 100;

function calcular_desconto(float $valor) :float
{
    $valor_final = null;

        if($valor >= 100){
            $valor_final = $valor - ($valor * 0.10);
            echo 'Você obteve um desconto de 10%' . PHP_EOL;
        }else{
            $valor_final = $valor;
             echo 'Não atingiu o valor para desconto' . PHP_EOL;
        }

    return $valor_final;

}


echo 'Valor inicial da compra: ' .  $valor_compra . PHP_EOL . 'Valor com desconto: '. calcular_desconto($valor_compra) ;


?>