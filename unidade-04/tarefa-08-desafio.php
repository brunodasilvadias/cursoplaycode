<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************* 
	Tarefa 8 - Desafio: 
		Crie uma funчуo com o nome que preferir. Ela vai receber o
		parтmetro estado, e deve retornar a regiуo que esse estado
		pertence. Se ela receber SP por exemplo, deve retornar Sudeste.
**********************************************************************/

function revelaRegiao($estado){
	
	if ( $estado == "RS" || $estado == "SC" || $estado == "PR"){
		
		return "Regiуo Sul";
	}
	
	if ( $estado == "MG" || $estado == "SP" || $estado == "ES" || $estado == "RJ"){
		
		return "Regiуo Sudeste";
	}
	
	if ( $estado == "DF" || $estado == "GO" || $estado == "MT" || $estado == "MS"){
		
		return "Regiуo Centro-Oeste";
	}
	
	if ( $estado == "BA" || $estado == "CE" || $estado == "PI" 
	|| $estado == "PE" || $estado == "SE" || $estado == "AL" 
	|| $estado == "PB" || $estado == "RN" || $estado == "MA" ){
	
		return "Regiуo Nordeste";	
	}
	
	if ( $estado == "TO" || $estado == "PA" || $estado == "AM" || $estado == "RR" 
	|| $estado == "AM" || $estado == "RO" || $estado == "AC"){
		
		return "Regiуo Norte";
	}
	else {
		return "Regiуo inexistъnte.";
	}
	
}

echo revelaRegiao("RJ");
?>