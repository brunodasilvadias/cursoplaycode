<?php
/************************************************************* 
	Tarefa 2: 
    Definir uma fun��o que calcule a comiss�o dos vendedores
    de uma loja. O percentual de comiss�o � 10%.
**************************************************************/
function calcular_comissao($vendas){
    $comissao = ($vendas * 10) / 100;
    return $comissao;
}

echo calcular_comissao($_GET['vendas']);
?>