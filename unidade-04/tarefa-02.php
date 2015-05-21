<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 2: 
		Crie uma fun��o chamada boletimEscolar. Essa fun��o deve 
		receber um n�mero no par�metro nota. As notas v�lidas s�o 
		de 0 a 10. Se o usu�rio digitar uma nota inv�lida a fun��o 
		deve retornar "Nota inv�lida". Depois de receber uma nota 
		v�lida, a fun��o deve retornar "Aprovado" ou "Reprovado". 
		A m�dia para aprova��o � 60%. 
		- Teste sua fun��o com as notas -5, 0, 7, 3 e 19
**********************************************************************/
function boletimEscolar ($nota){

	if ( ($nota < 0) || ($nota >10) ){

		return "Nota inv�lida";

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