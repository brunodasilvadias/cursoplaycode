<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************ 
	Tarefa 3: 
		Crie uma função chamada calcularFrete que recebe a
		sigla do estado como parâmetro e retorne o valor do
		frete. O frete deve ser calculado de acordo com a 
		seguinte tabela de preços:
		MG     -> 12,50
		SP     -> 23,90
		RJ     -> 18,20
		Outros -> 35,90
		- Teste com os estados MG, SP, RJ e CE
************************************************************/

function calcularFrete($estado) {
	
	if ( $estado == "MG"){
		return "Estado: ".$estado." 12,50"; 
	}
	
	else if ( $estado == "SP"){
		return "Estado: ".$estado." 23,90";
	}
	
	else if ( $estado == "RJ"){
		return "Estado: ".$estado." 18,20";
	}
	
	else {
		return "Estado: ".$estado." 35,90";
	}
}

echo calcularFrete("RJ");
?>
