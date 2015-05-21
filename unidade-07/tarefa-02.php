<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************ 
	Tarefa 2: 
		Crie uma função chamada semanaCompleta, ele deve usar a função
		diasUteis e adicionar mais 2 dias, sábado e domingo. Teste a função
		usando um foreach.
*************************************************************************/


require_once "tarefa-01.php";

function semanaCompleta() {
	$semana = diasUteis();
	array_push($semana, "sabado", "domingo");
	return $semana;
}
//print_r ( semanaCompleta() );

$semana = semanaCompleta();

foreach( $semana as $dia){
	echo $dia . "<br>";
}

?>
