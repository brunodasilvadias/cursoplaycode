<?php
/************************************************************* 
	Tarefa 2: 
    Definir uma funчуo que calcule a comissуo dos vendedores
    de uma loja. O percentual de comissуo щ 10%.
**************************************************************/
function calcular_comissao($vendas){
    $comissao = ($vendas * 10) / 100;
    return $comissao;
}

echo calcular_comissao($_GET['vendas']);
?>