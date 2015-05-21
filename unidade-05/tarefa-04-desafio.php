<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************************
	Tarefa 4 - Desafio: (USE SWITCH CASE)
		Crie uma função que recebe um número de 1 a 7 e informa o dia da
		semana correspondente, sendo domingo o dia de número 1. Se o número
		não corresponder a um dia da semana, é mostrado uma mensagem avisando
		que o número é inválido.
		- Teste sua função com 1, 2, 3, 4, 5, 6, 7, 8
****************************************************************************/

function diaSemana($dia){
	
	switch ($dia){
		case 1: return "Domingo";
		case 2: return "Segunda-feira";
		case 3: return "Terça-feira";
		case 4: return "Quarta-feira";
		case 5: return "Quinta-feira";
		case 6: return "Sexta-feira";
		case 7: return "Sabado";
		default:return "Número inválido";
	}
}
echo diaSemana($_GET['dia']);
?>