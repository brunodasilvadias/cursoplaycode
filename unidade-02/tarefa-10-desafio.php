<?php
/**************************************************************************** 
	Desafio:
		Criar uma fun��o chamada mensagem_salario_liquido que
		retorna a mensagem: 
			Seu sal�rio l�quido � X reais.
		Essa fun��o vai receber 2 par�metros, o valor do sal�rio
		e o valor dos impostos.
		
		Exemplo: recebe 800 de sal�rio, tem 200 de impostos.
			mensagem_salario_liquido(800, 200) => Seu sal�rio l�quido � 600 reais.
*****************************************************************************/

function salario_liquido($salario, $impostos) {
	return $salario - $impostos;
}


echo salario_liquido($_GET['salario'], $_GET['impostos']);
?>