<?php 
/********************************************************** 
	Desafio: 
		Criar uma fun��o chamada salario_liquido. Essa fun��o 
		vai receber dois par�metros, o primeiro referente ao 
		sal�rio e o segundo referente aos impostos. Ela deve
		retornar o valor do sal�rio reduzidos os impostos.
	
		Exemplo: recebe 800 de sal�rio, tem 200 de impostos, 
		portanto o sal�rio l�quido � 600.
			salario_liquido(800, 200) => 600
***********************************************************/

function salario_liquido($salario, $impostos) {

$salario_liquido = $salario - $impostos;

return $salario_liquido;

}

echo salario_liquido($_GET['salario'], $_GET['impostos']);
?>