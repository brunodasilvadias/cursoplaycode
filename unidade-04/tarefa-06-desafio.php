<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************
	Tarefa 6 - Desafio:
		Crie uma fun��o chamada sexo, que pode receber as letras M ou F
		como par�metro. Se for M retorna "Masculino" e se for F retorna
		"Feminino". Deve retornar inv�lido, se for diferente de M ou F.
*************************************************************************/

function sexo($gen){
	
	if ($gen == 'M' || $gen == 'm'){
		return "Masculino";
	}
	
	else if($gen == 'F' || $gen == 'f'){
		return "Feminino";
	}
	
	else {
		return "D�gito inv�lido";
	}
}
	
	echo sexo('F');
?>