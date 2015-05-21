<?php
/**************************************************************************** 
	Desafio:
		Criar uma funзгo chamada mensagem_salario_liquido que
		retorna a mensagem: 
			Seu salбrio lнquido й X reais.
		Essa funзгo vai receber 2 parвmetros, o valor do salбrio
		e o valor dos impostos.
		
		Exemplo: recebe 800 de salбrio, tem 200 de impostos.
			mensagem_salario_liquido(800, 200) => Seu salбrio lнquido й 600 reais.
*****************************************************************************/

function salario_liquido($salario, $impostos) {
	return $salario - $impostos;
}


echo salario_liquido($_GET['salario'], $_GET['impostos']);
?>