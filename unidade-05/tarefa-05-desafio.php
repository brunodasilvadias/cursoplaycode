<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 5 - Desafio: (USE SWITCH CASE)
		Crie uma função com o nome que preferir. Ela vai receber o
		parâmetro estado, e deve retornar a região que esse estado
		pertence. Se ela receber SP por exemplo, deve retornar Sudeste.
		- Faça testes com os estados SP, BA, RS e AM.
***********************************************************************/

function encontraRegiao($estado){
	switch ($estado){
		case (($estado =="RS") || ($estado == "SC") || ($estado== "PR")):
			return "Região Sul";
		
		case (($estado == "MG") || ($estado == "SP") || ($estado == "ES")  || ($estado == "RJ")): 
			return "Região Sudeste";
		case (($estado == "DF") || ($estado == "GO") || ($estado == "MT") || ($estado == "MS")): return "Região Centro-Oeste";
		case (($estado == "BA") || ($estado == "CE") || ($estado == "PI")|| ($estado == "PE") || ($estado == "SE") || ($estado == "AL") || ($estado == "PB") || ($estado == "RN") || ($estado == "MA")): return "Região Nordeste";
		case (($estado == "TO") || ($estado == "PA") || ($estado == "AM") || ($estado == "RR") || ($estado == "AM") || ($estado == "RO") || ($estado == "AC")): return "Região Norte";
		default: return "Estado inexistênte";
	}
}

echo encontraRegiao($_GET['estado']);
?>