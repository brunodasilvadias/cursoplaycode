<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 1: 
		Crie uma função chamada diasUteis que retorna um array com todos 
		os dias úteis da semana. Pra testar a função você deve dar um echo 
		em todos os dias com a ajuda de um comando de loop.
***********************************************************************/

function diasUteis(){
	 $dias = array( "segunda", "terça", "quarta", "quinta", "sexta" );
	 return $dias;
}

//print_r( diasUteis());

$dias = diasUteis();
//echo count($dias);

//foreach( $dias as $dia){
//	echo $dia . "<br>";
//}

?>