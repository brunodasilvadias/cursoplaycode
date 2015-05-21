<?php
header("Content-Type: text/html; charset=utf-8");
/*************************************************************** 
	Tarefa 9 - Desafio: 
		Agora você vai criar uma função que calcula o imposto de 
		renda. O nome da função deve ser calculaImposto e deve 
		receber o parâmetro salário. O retorno da função deve ser 
		"Isento" ou o valor do imposto calculado de acordo com a 
		 tabela a) da página http://bit.ly/imposto-renda
		 - Teste com os valores: 1.300,00 2.500,00 e 5.000,00
****************************************************************/

function calculaImposto($salario){
	
	if ( $salario <= 0 ){
		
		return "Salário Inexistente";
	}
	if ( $salario > 0 && $salario <= 1903.98 )
	{
		return "Isento";
	}
	
	if ( $salario > 1903.98 && $salario <= 2826.65 ){
		return 142.80;
	}
	
	if ( $salario > 2826.65 && $salario <= 3751.05){
		
		return 354.80;
	}
	
	if ( $salario > 3751.05 && $salario <= 4664.68){
		
		return 636.13;
	}
	
	else {
		
		return 869.36;
	}
}

echo calculaImposto(2900);

?>