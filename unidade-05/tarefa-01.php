<?php
header("Content-Type: text/html; charset=utf-8");
/*********************************************************** 
	Tarefa 1: (USE SWITCH CASE) 
		Crie uma função chamada calcularFrete que recebe a
		sigla do estado como parâmetro e retorne o valor do
		frete. O frete deve ser calculado de acordo com a 
		seguinte tabela de preços:
		MG     -> 12,50
		SP     -> 23,90
		RJ     -> 18,20
		Outros -> 35,90
		- Teste com os estados MG, SP, RJ e CE
***********************************************************/

function calculaFrete($estado){
	
	switch ($estado){
		
		case "MG": return 12.50;
		
		case "SP": return 23.90;
		
		case "RJ": return 18.50;
		
		default: return 35.90;
	}
}

echo calculaFrete("RJ");
?>