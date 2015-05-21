<?php
header("Content-Type: text/html; charset=utf-8");
/**********************************************************************
	Tarefa 4: 
		Crie uma função com o nome que preferir. Essa função deve
		receber um parâmetro altura e retornar uma mensagem de acordo
		com a tabela:
		menos que 1,60 -> "baixinho"
		de 1,60 a 1,85 -> "altura normal"
		mais de um 1,85 -> "Joga basquete?"
		- Teste com os valores 1,40  1,70  1,85 e  2,00
**********************************************************************/

function medirAltura($altura){
	
	
	if ( $altura >0 && $altura < 1.60 ){
		return "Baixinho";
	}
	
	else if ( $altura >= 1.60 && $altura <= 1.85 ){
		return "Altura Normal";
	}
	
	else if ( $altura > 1.85 ){
		return "Joga Basquete?";
	}
	
	else {
		return "Altura inexistente";
	}
}

echo medirAltura(2.05);
?>