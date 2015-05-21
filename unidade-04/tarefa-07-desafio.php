<?php
header("Content-Type: text/html; charset=utf-8");
/**************************************************************** 
	Tarefa 7 - Desafio: 
		Crie uma função chamada mensagemBoasVindas. Essa função
		recebe um número de 0 à 23 referente às horas do dia.
		De acordo com essa hora, deve retorna uma das mensagens
		"Bom dia", "Boa tarde" ou "Boa noite".
*****************************************************************/
function mensagemBoasVindas($hora){
	
	if ($hora >= 0 && $hora < 12) {
		
		return "Bom dia";
	}
	
	if ($hora >= 12 && $hora < 19){
	
		return "Boa tarde";	
	}
	
	if ($hora >= 19 && $hora < 24){
	
		return"Boa noite";
	}
	else {
		return "Hora inválida";
	}
}

echo mensagemBoasVindas(12); 
?>














