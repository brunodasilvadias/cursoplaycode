<?php
header("Content-Type: text/html; charset=utf-8");
/***********************************************************************
	Tarefa 10 - Desafio: 
		Crie uma fun��o chamada validarCampo. Ela recebe uma string como
		par�metro. Se a string for maior que 4, deve retornar a mensagem
		"Campo deve ter no m�ximo 4 letras".
************************************************************************/

function validarCampo($texto){
	if ( strlen($texto) > 4 ){
		
		return "Campo deve ter no m�ximo 4 letras";
	}	
	
	else {
		
		return "Correto";
	}
}

echo validarCampo("abcdgdg");
?>