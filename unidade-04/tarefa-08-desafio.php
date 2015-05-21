<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************* 
	Tarefa 8 - Desafio: 
		Crie uma fun��o com o nome que preferir. Ela vai receber o
		par�metro estado, e deve retornar a regi�o que esse estado
		pertence. Se ela receber SP por exemplo, deve retornar Sudeste.
**********************************************************************/

function revelaRegiao($estado){
	
	if ( $estado == "RS" || $estado == "SC" || $estado == "PR"){
		
		return "Regi�o Sul";
	}
	
	if ( $estado == "MG" || $estado == "SP" || $estado == "ES" || $estado == "RJ"){
		
		return "Regi�o Sudeste";
	}
	
	if ( $estado == "DF" || $estado == "GO" || $estado == "MT" || $estado == "MS"){
		
		return "Regi�o Centro-Oeste";
	}
	
	if ( $estado == "BA" || $estado == "CE" || $estado == "PI" 
	|| $estado == "PE" || $estado == "SE" || $estado == "AL" 
	|| $estado == "PB" || $estado == "RN" || $estado == "MA" ){
	
		return "Regi�o Nordeste";	
	}
	
	if ( $estado == "TO" || $estado == "PA" || $estado == "AM" || $estado == "RR" 
	|| $estado == "AM" || $estado == "RO" || $estado == "AC"){
		
		return "Regi�o Norte";
	}
	else {
		return "Regi�o inexist�nte.";
	}
	
}

echo revelaRegiao("RJ");
?>