<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 2: 
		Crie uma funзгo chamada boletimEscolar. Essa funзгo deve 
		receber um nъmero no parвmetro nota. As notas vбlidas sгo 
		de 0 a 10. Se o usuбrio digitar uma nota invбlida a funзгo 
		deve retornar "Nota invбlida". Depois de receber uma nota 
		vбlida, a funзгo deve retornar "Aprovado" ou "Reprovado". 
		A mйdia para aprovaзгo й 60%. 
		- Teste sua funзгo com as notas -5, 0, 7, 3 e 19
**********************************************************************/
function boletimEscolar ($nota){

	if ( ($nota < 0) || ($nota >10) ){

		return "Nota invбlida";

	}
	
	else if ($nota >= 6){
		
		return "Aprovado";
	}
	
	else{
		return "Reprovado";
	}
}
	

echo boletimEscolar(10);
?>