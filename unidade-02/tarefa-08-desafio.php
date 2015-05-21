<?php
/************************************************************* 
	Desafio: 
		Criar uma função chamada horas, que recebe a quantidade
		de dias e retorna a quantidade de horas.
		
		Exemplo: 2 dias tem 48 horas.
			horas(2) => 48
**************************************************************/

function horas($dias){
	return $dias * 24;
}

echo horas($_GET['dias']);
?>












