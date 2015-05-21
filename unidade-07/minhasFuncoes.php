<?php
header("Content-Type: text/html; charset=utf-8");



function diasUteis(){
	 $dias = array( "segunda", "terça", "quarta", "quinta", "sexta" );
	 return $dias;
}

function semanaCompleta() {
	$semanaU = diasUteis();
	array_push($semanaU, "sabado", "domingo");
	return $semanaU;
}

function meses(){
	$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
	return $meses; 
}



?>