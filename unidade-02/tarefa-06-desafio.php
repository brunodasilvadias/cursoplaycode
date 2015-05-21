<?php 
/********************************************************** 
	Desafio: 
		Criar uma funзгo chamada salario_liquido. Essa funзгo 
		vai receber dois parвmetros, o primeiro referente ao 
		salбrio e o segundo referente aos impostos. Ela deve
		retornar o valor do salбrio reduzidos os impostos.
	
		Exemplo: recebe 800 de salбrio, tem 200 de impostos, 
		portanto o salбrio lнquido й 600.
			salario_liquido(800, 200) => 600
***********************************************************/

function salario_liquido($salario, $impostos) {

$salario_liquido = $salario - $impostos;

return $salario_liquido;

}

echo salario_liquido($_GET['salario'], $_GET['impostos']);
?>